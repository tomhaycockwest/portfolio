import gulp from 'gulp';

gulp.task('build:dev', [ 'styles', 'scripts' ]);

gulp.task('build:dist', [ 'styles:dist', 'scripts:dist' ]);
