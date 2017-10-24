import gutil from 'gulp-util';
import prettyHrtime from 'pretty-hrtime';

let startTime;

export const logStart = (filepath) => {
	startTime = process.hrtime();
	gutil.log('Running', gutil.colors.cyan('`bundle`'), 'on', `${gutil.colors.green(filepath)}...`);
};

export const logEnd = (filepath) => {
	const taskTime   = process.hrtime(startTime);
	const prettyTime = prettyHrtime(taskTime);

	gutil.log('Finished', gutil.colors.cyan('`bundle`'), 'on', gutil.colors.green(filepath), 'after', gutil.colors.magenta(prettyTime));
};
