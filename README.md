## Docker

### Databases

Change you're .env host file to `database:3306` to work with docker

### Running

Run the app

    $ docker-compose up 

## Setup CMS
* Go to appearance -> themes
* Activate relevant Theme
* Go to Pages -> Add new
* Create a page named 'home' and assign it to use the 'home' template
* Click 'Publish'
* Go to Settings -> Reading
* Select 'A Static Page'
* Select Front Page 'Home'
* Click 'Save Changes'
* Go to Settings -> Permalinks
* Select 'Custom Structure' /%postname%/
* Click 'Save Changes'

