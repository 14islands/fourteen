# Fourteen
A _truly_ copy & paste Wordpress boilerplate theme.

Fourteen is a clean boilerplate theme that gives you a headstart in your Wordpress theme, without making you spend too much time removing stuff. 
The idea is that you should spend time _adding_ functionality on top this theme rather than _removing_ things you won’t use.

For instance, there is no sidebar, widget locations, etc. There is also no front-end setup here. `Gulp` or `Grunt`? `Stylus` or `SASS`? That is all up to you, there are no `css/` or `js`/ folders created for you :yum:

## How to use it

Considering you are in your `wp-content/themes/` folder, paste the following in your terminal:

 `curl -L -o fourteen.zip https://github.com/14islands/fourteen/zipball/master/ ; unzip fourteen.zip`

Otherwise simply [download the ZIP](https://github.com/14islands/fourteen/archive/master.zip) of this repository and put it in your `wp-content/themes/`. 

From there on it's all yours: make sure to rename the folder, add a few things, etc.

## File structure and functions classes

The theme uses PHP5 OOP Classes to break down the `functions.php` in a more dynamic manner. 
This way there is no need to prefix your function names anywhere nor check if they exist before writing the actual code.
Also gives you a much more maintainable code base.

No more of this ugly checks `if ( ! function_exists( ‘function_name’ ) ) :` nor old code snippets lying around!

### Adding your own function classe
Every class inside of `/functions/` will be automatically loaded __except the ones that are prefixed with '_'__.

As of now it ships with the following folders:

* `admin` for admin (back-end) related functionalities.
* `content` for content models.
* `structure` for content architecture (post types, taxonomy, etc).
* `theme` for theme related functionalities.
* `utils` for general utilities.

The names or ammount of folders don't really matter. Feel free to structure it as you want to. 

Full structure:

```
|-- fourteen
    |-- .editorconfig
    |-- 404.php
    |-- archive.php
    |-- footer.php
    |-- functions.php
    |-- header.php
    |-- index.php
    |-- page.php
    |-- search.php
    |-- single.php
    |-- style.css
    |-- functions
    |   |-- admin
    |       |-- _class-admin-menu.php <- this would NOT be loaded
    |       |-- class-mce.php <- this WOULD be loaded
    |   |-- content
    |   |-- structure
    |   |-- theme
    |   |-- utils
    |-- languages
    |   |-- fourteen.pot
    |-- page-templates
    |-- template-parts
        |-- content-none.php
        |-- content-page.php
        |-- content-search.php
        |-- content-single.php
        |-- content.php
```
Inspired by [_s](https://github.com/Automattic/_s) and from our own private themes.
