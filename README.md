# Fourteen
A Wordpress boilerplate theme.

Fourteen is a clean boilerplate theme that gives you a headstart in your Wordpress theme, without making you spend too much time removing stuff. 
The idea is that you should spend time _adding_ functionality on top this theme rather than _removing_ things you won’t use.

For instance, there is no sidebar, widget locations, etc. There is also no front-end setup here. Gulp or Grunt? Stylus or SASS? That is all up to you, there is no `css/` or `js`/ folders created for you :yum:

## How to use it
I recommend you simple download this repository and unzip it to start with a clean slate without this repositories info. Otherwise, for this repository to have your own copy and then clone it inside your `wp-content/themes/`.

## File structure and functions classes

The theme uses PHP5 OOP Classes to break down the `functions.php` in a more dynamic manner. 
This way there is no need to prefix your function names anywhere nor check if they exist before writing the actual code.
Also gives you a much more maintainable code base.

No more `if ( ! function_exists( ‘function_name’ ) ) :` nor old code snippets lying around!

### Adding your own function classes
Every class inside of `/inc/functions/` will be automatically loaded except the ones that start with '_'.

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
    |-- inc
    |   |-- functions
    |       |-- _class-admin-menu.php <- this will NOT be loaded
    |       |-- class-mce.php <- this WILL be loaded
    |       |-- class-template-tags.php
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
Inspired by [_s](https://github.com/Automattic/_s). Some theme markup was copied from there and "cleaned up" to be more minimalistic.
