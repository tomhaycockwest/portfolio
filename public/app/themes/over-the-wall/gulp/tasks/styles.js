import gulp from 'gulp';
import sourcemaps from 'gulp-sourcemaps';
import sass from 'gulp-sass';
import autoprefixer from 'gulp-autoprefixer';
import gulpif from 'gulp-if';
import notify from 'gulp-notify';
import concat from 'gulp-concat';
import cssnano from 'gulp-cssnano';

import config from 'gulp/config';
import handleErrors from 'gulp/util/error-handler';
import getAssets from 'gulp/util/get-assets';

gulp.task('styles', [ 'modernizr' ], () => {

	return gulp.src(config.globs.sass)
		.pipe(sourcemaps.init())
		.pipe(sass(config.sass))
		.on('error', function(err) {
			err.message = err.message.replace('\n', '');
			handleErrors.call(this, err); // eslint-disable-line no-invalid-this
		})
		.pipe(autoprefixer(config.autoprefixer))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(config.paths.css))
		.pipe(gulpif(global.flags.notify, notify({message: 'Styles task finished', onLast: true})));

});

gulp.task('styles:dist', [ 'styles' ], () => {
	const assets = getAssets();

	return gulp.src(assets.css)
		.pipe(concat(`build-${config.pkg.version}.css`))
		.pipe(cssnano(config.cssNano))
		.pipe(gulp.dest(config.paths.build))
		.pipe(gulpif(global.flags.notify, notify({message: 'Styles dist task finished', onLast: true})));
});
