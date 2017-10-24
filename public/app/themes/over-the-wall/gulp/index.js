import fs from 'fs';
import path from 'path';

import onlyScripts from 'gulp/util/script-filter';

const tasks = fs.readdirSync(path.join(__dirname, 'tasks')).filter(onlyScripts);

tasks.forEach((task) => {
	return require(path.join(__dirname, `tasks/${task}`));
});
