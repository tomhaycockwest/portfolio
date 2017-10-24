<?php

/**
 * Plugin Name: Google Analytics
 */

add_action('wp_footer', 'analytics');
function analytics() {

	if(getenv('WP_ENV') === 'development' || !getenv('GA_UA')) return;

	?>

		<script>
			!function(B,r,a,v,e){B.GoogleAnalyticsObject=a;B[a]||(B[a]=function(){
			(B[a].q=B[a].q||[]).push(arguments)});B[a].l=+new Date;v=r.createElement('script');
			e=r.scripts[0];v.src='//www.google-analytics.com/analytics.js';
			e.parentNode.insertBefore(v,e)}(window,document,'ga');

			ga('create', '<?php echo getenv('GA_UA'); ?>', 'auto');
			ga('send', 'pageview');
		</script>

	<?php
}
