# MVC-app
Standard web application structure for http://github.com/slacki/mvc

## Directory structure descrtiption

+ `config/` - contains all configuration files
+ `controllers/` - contains all controller files
+ `data/` - files such as database schema, logs, etc
+ `models/` - contains models
+ `views/` - all view files including header and footer
+ `web/` - the only directory visible for end user; css, js, font, img or other stuff goes here

## Web server configuration

Just set your vhosts or whatever the fuck to point to `web/`.
Not gonna teach you that easy stuff!

## .htaccess?

If you wish you can use it, "Framework" should handle this.

## Usage and installation

The fastest and easiest way I can think of is just downloading this repo's zip package.
After that you have to install all dependencies (there is only one, actually) simply by running this command
```
$ composer install
```
You can start development right away.