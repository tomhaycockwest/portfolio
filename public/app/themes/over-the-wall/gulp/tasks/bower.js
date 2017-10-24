// https://github.com/sass/sass/issues/556#issuecomment-73439666

import fs from 'fs-extra';
import gulp from 'gulp';

import config from 'gulp/config';
import handleErrors from 'gulp/util/error-handler';

gulp.task('bower:postinstall', (done) => {
	fs.rename(
		`${config.paths.bower}/normalize-css/normalize.css`,
		`${config.paths.bower}/normalize-css/_normalize.scss`,
		(err) => {
			if(err) {
				handleErrors(err);
			}
			done();
		}
	);
});
