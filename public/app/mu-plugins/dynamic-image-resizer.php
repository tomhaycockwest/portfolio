<?php

/**
 * Plugin Name: Dynamic Image Resizer
 */

class DynamicImageResizer {

	public function __construct() {

		add_action('template_redirect', array($this, 'handle_template_redirect'));
		add_action('delete_attachment', array($this, 'handle_delete_attachment'), 1);

		add_filter('intermediate_image_sizes_advanced', array($this, 'image_sizes_advanced'));
		add_filter('wp_generate_attachment_metadata', array($this, 'generate_metadata'));
		add_filter('image_downsize', array($this, 'image_downsize'), 10, 3);

	}

	public function handle_template_redirect() {

		if(!is_404()) return;

		if(preg_match('/(.*)-([0-9]+)x([0-9]+)(c)?\.(jpg|jpeg|png|gif)/i', $_SERVER['REQUEST_URI'], $matches)) {
			$filename = urldecode(sprintf('%s.%s', $matches[1], $matches[5]));
			$width = $matches[2];
			$height = $matches[3];
			$crop = !empty($matches[4]);

			$upload_dir = wp_upload_dir();
			$temp = parse_url($upload_dir['baseurl']);
			$upload_path = $temp['path'];
			$findfile = str_replace($upload_path, '', $filename);

			$basefile = $upload_dir['basedir'] . $findfile;

			$suffix = sprintf('%sx%s', $width, $height);
			if($crop) $suffix .= 'c';

			if(is_file($basefile)) {
				$editor = wp_get_image_editor($basefile);

				if(!is_wp_error($editor)) {
					$editor->set_quality(90);

					$resized = $editor->resize($width, $height, $crop);

					if(!is_wp_error($resized)) {
						$dest_file = $editor->generate_filename($suffix, null);
						$saved = $editor->save($dest_file);

						if(!is_wp_error($saved)) {

							foreach(get_allowed_mime_types() as $exts => $mime) {
								if(preg_match(sprintf('!^(%s)$!i', $exts), $matches[5])) {
									$type = $mime;
									break;
								}
							}

							header(sprintf('Content-Type: %s', $type));
							header(sprintf('Content-Length %d', filesize($dest_file)));
							readfile($dest_file);
							exit;
						}
					} else {
						header(sprintf('Location: %s', $upload_dir['baseurl'] . $findfile));
						exit;
					}
				}
			}

			$this->show_placeholder();
		}
	}

	private function show_placeholder() {
		if(getenv('WP_ENV') === 'development') {
			$crop_text = ($crop) ? 'c' : '';
			header(sprintf('Location: //placehold.it/%dx%d&text=%sx%s%s', $width, $height, $width, $height, $crop_text));
			exit;
		}
	}

	private function get_intermediate_size($post_id, $size = 'medium') {
		global $_wp_additional_image_sizes;

		if(is_array($size)) {
			$width = (int) @$size[0];
			$height = (int) @$size[1];
			$crop = (@$size[2]) ? 'c' : '';
		} elseif($img_size = @$_wp_additional_image_sizes[$size]) {
			$width = $img_size['width'];
			$height = $img_size['height'];
			$crop = ($img_size['crop']) ? 'c' : '';
		} elseif(is_string($size)) {
			$width = get_option($size.'_size_w');
			$height = get_option($size.'_size_h');
			$crop = get_option($size.'_crop') ? 'c' : '';

			if(!$crop) {
				$meta = wp_get_attachment_metadata($id);

				$full_w = absint(@$meta['width']);
				$full_h = absint(@$meta['height']);

				if($full_w && $full_w) {
					$height = floor($width*($full_h/$full_w));
				}
			}
		}

		if(@$width && @$height && $img_file = get_attached_file($id, true)) {
			$parts = pathinfo($img_file);
			return sprintf('%s/%s-%dx%d%s.%s', $parts['dirname'], $parts['filename'], $width, $height, $crop, $parts['extension']);
		}

		return false;
	}

	public function handle_delete_attachment($post_id) {
		global $_wp_additional_image_sizes;

		$image_sizes = array('thumbnail', 'medium', 'large');

		if(isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes)) {
			$image_sizes = array_merge($image_sizes, array_keys($_wp_additional_image_sizes));
		}

		foreach(get_intermediate_image_sizes() as $size) {
			if($intermediate = $this->get_intermediate_size($post_id, $size)){
				@ unlink($intermediate);
			}
		}
	}

	public function image_sizes_advanced($sizes) {
		global $dynimg_image_sizes;

		$dynimg_image_sizes = $sizes;

		return array();
	}

	public function generate_metadata($meta) {
		global $dynimg_image_sizes;

		foreach($dynimg_image_sizes as $sizename => $size) {
			// figure out what size WP would make this:
			$newsize = image_resize_dimensions($meta['width'], $meta['height'], $size['width'], $size['height'], $size['crop']);

			if($newsize) {
				$info = pathinfo($meta['file']);
				$ext = $info['extension'];
				$name = wp_basename($meta['file'], ".$ext");

				$suffix = "{$newsize[4]}x{$newsize[5]}";
				if($size['crop']) $suffix .='c';

				// build the fake meta entry for the size in question
				$resized = array(
					'file' => "{$name}-{$suffix}.{$ext}",
					'width' => $newsize[4],
					'height' => $newsize[5],
				);

				$meta['sizes'][$sizename] = $resized;
			}
		}

		return $meta;
	}

	public function image_downsize($value = false, $post_id, $size = 'medium') {
		global $_wp_additional_image_sizes;

		if(is_array($size)) {
			$width = (int) @$size[0];
			$height = (int) @$size[1];
			$crop = (@$size[2]) ? 'c' : '';
		}
		elseif($img_size = @$_wp_additional_image_sizes[$size]) {
			$width = $img_size['width'];
			$height = $img_size['height'];
			$crop = ($img_size['crop']) ? 'c' : '';
		}
		elseif(is_string($size)) {
			$width = get_option($size.'_size_w');
			$height = get_option($size.'_size_h');
			$crop = get_option($size.'_crop') ? 'c' : '';

			if(!$crop) {
				$meta = wp_get_attachment_metadata($post_id);

				$full_w = absint(@$meta['width']);
				$full_h = absint(@$meta['height']);

				if($full_w && $full_w) {
					$height = floor($width*($full_h/$full_w));
				}
			}
		}

		if(@$width && @$height && $img_url = wp_get_attachment_url($post_id)) {
			$parts = pathinfo($img_url);
			$img_url = sprintf('%s/%s-%dx%d%s.%s', $parts['dirname'], $parts['filename'], $width, $height, $crop, $parts['extension']);
			return array($img_url, $width, $height, false);
		}

		return false;
	}

}

// Only run if we are not on multisite
if(!is_multisite()) {
	new DynamicImageResizer();
}
