import fs from 'fs';
import path from 'path';
import gutil from 'gulp-util';
import _ from 'lodash';

import config from 'gulp/config';

// Get all CSS & JS asset sources from assets.json
export default () => {

	if(!fs.existsSync(config.files.assets)) {
		throw new gutil.PluginError('get-assets', `No assets data file exists at ${config.files.assets}`);
	}

	const assets = {
		data: require(path.resolve(config.files.assets)),
		css: [],
		js: {
			header: [],
			footer: []
		}
	};

	// Templating variables, for replacing paths etc
	const templateVars = {
		'{{ wpInc }}': config.paths.wpInc
	};

	const replaceTemplateVars = (string) => {
		_.each(templateVars, (val, key) => {
			string = string.replace(key, val);
		});
		return string;
	};

	// Parse CSS assets list
	assets.data.css.forEach(asset => {
		if(asset.external) { return; }
		asset.src = replaceTemplateVars(asset.src);
		assets.css.push(asset.src);
	});

	assets.css.push('build/style.css');

	// Parse JS assets list
	assets.data.js.forEach(asset => {
		if(asset.external) { return; }

		asset.src = replaceTemplateVars(asset.src);

		if(typeof asset.in_footer !== 'undefined' && !asset.in_footer) {
			assets.js.header.push(asset.src);
		} else {
			assets.js.footer.push(asset.src);
		}
	});

	return assets;
};
