/**
 * Split the gulpfile into seperate modules
 * Tasks in ./gulp/tasks will get automatically  detected and made available via the command line
 */

require('babel-core/register')({
	resolveModuleSource: require('babel-resolver')(__dirname),
});

require('./gulp');
