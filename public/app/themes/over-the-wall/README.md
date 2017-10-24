# Keystone Games
> 

## Links
Live: [http://](http://)
Staging: [http://](http://)
JIRA: [](http://)

## Deployment
[Live](http://134.213.28.195:8080/job/): **Manual** deployment with Jenkins via Git (tracks `master`)
[Staging](http://134.213.28.195:8080/job/): **Auto** deployment with Jenkins via Git (tracks `dev`)

> ### IMPORTANT:
> When deploying make sure that `.env` files can't be publicly accessed!
> You can use the included `.htaccess` but it isn't committed by default.

## Development
* Copy `.env-example` and rename it to `.env`
update it with your environment specifics (DB, base url, etc)

* Run `composer install`
from the folder containing `composer.json`, if the file exists

* Run `npm install`
from the folder containing `package.json`

* Run `bower install`
from the folder containing `bower.json`

* Run `gulp` to build the project & watch for changes
from the folder containing `Gulpfile.js`




