import gulp from 'gulp';
import imagemin from 'gulp-imagemin';
import gulpif from 'gulp-if';
import notify from 'gulp-notify';

import config from 'gulp/config';

gulp.task('images', () => {
	return gulp.src(config.globs.img, {base: '.'})
		.pipe(imagemin())
		.pipe(gulp.dest(config.paths.dist))
		.pipe(gulpif(global.flags.notify, notify({message: 'Images task finished', onLast: true})));
});
