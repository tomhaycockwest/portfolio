/* eslint no-invalid-this: 0 */

import notify from 'gulp-notify';

export default function(error) {
	let message;

	if(error && error.message) {
		message = error.message;
	} else {
		message = error;
	}

	notify.onError({
		title: 'Gulp Error',
		message,
	})(error);

	if(typeof this.emit !== 'undefined') {
		this.emit('end');
	}
}
