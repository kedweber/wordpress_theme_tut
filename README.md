# Free Word Press Theme & Terse Tutorial (wordpress_theme_tut)

Table of Contents
* [Introduction] (https://github.com/kedweber/wordpress_theme_tut#introduction)
    * [REQUIREMENTS] (https://github.com/kedweber/wordpress_theme_tut#requirements)
    * [Theme Creation Tutorial ~ Lite] (https://github.com/kedweber/wordpress_theme_tut#theme-creation-tutorial--lite)
        * [Generalities of WordPress Themes] (https://github.com/kedweber/wordpress_theme_tut#generalities-of-wordpress-themes)
        * [Child Theme Creation Specifics] (https://github.com/kedweber/wordpress_theme_tut#child-theme-creation-specifics)
            * [The style.css file's role in child themes] (https://github.com/kedweber/wordpress_theme_tut#the-stylecss-files-role-in-child-themes)
            * [The functions.php file's role in child themes] (https://github.com/kedweber/wordpress_theme_tut#the-functionsphp-files-role-in-child-themes)
        * [A Theme's File Structure] (https://github.com/kedweber/wordpress_theme_tut#a-themes-file-structure)
        * [Generalities of WordPress Scripting / Coding vs. Template Tags] (https://github.com/kedweber/wordpress_theme_tut#generalities-of-wordpress-scripting--coding-vs-template-tags)
        * [Generalities of WordPress Theme Frameworks & Starter Themes] (https://github.com/kedweber/wordpress_theme_tut#generalities-of-wordpress-theme-frameworks--starter-themes)
    * [Resources] (https://github.com/kedweber/wordpress_theme_tut#resources)
        * [Twig Template Markup In a Nutshell] (https://github.com/kedweber/wordpress_theme_tut#twig-template-markup-in-a-nutshell-cheatsheet)
        * [Installation of a RAW Twig Configuration outside of WordPress] (https://github.com/kedweber/wordpress_theme_tut#installation-of-a-raw-twig-configuration-not-within-the-wordpress-framework)
        

## Introduction

[Website for this and other Repositories](http://kedweber.github.io)

Ah... yeah, well, given that the midnight oil has officially expended the wick in the bottle 
it is now time to consider not going into `creative writing` as we aren't fully certain just how good 
of a tutorial is going to come out of this ragged day. Nevertheless, we will be offering some pretty 
broad strokes on the generalities and leaving a handful of references behind just to haunt you like a 
ghost when you're trying to muscle out your own WordPress Themes and need to fall back on some other 
Norwegian Husky sled dogs that plowed the snow before you.

This Semi-Tutorial \(or Terse Tutorial\) will not cover all the finer parts of working with WordPress 
Themes, and assumes you are totally aware of HTML5, JavaScript 6 \(just kidding, JavaScript old-school is fine\), 
CSS3, and PHP5+ \(albeit the 25th of June 2015, saw the Alpha 2 Release of PHP 7.0.0, while PHP 5.4.42 was released the 11th June\) 
and finally, not cover one of the most popular Templating Engines, we will be using TWIG.

Why [TWIG](http://twig.sensiolabs.org/)? It has become one of the more popular templating engines to this date. 
[Expression Engine's CMS](https://ellislab.com/expressionengine), [Symfony Framework](https://github.com/symfony/symfony) 
and the [Timber plugin](http://upstatement.com/timber/) for [WordPress](http://wordpress.org) also 
uses [TWIG](http://twig.sensiolabs.org/) templating.

## REQUIREMENTS!!!

You will need a chair, a working system with PHP on a webserver of your choice and perhaps the optional pot of 
coffee along with the following:

* [WordPress](https://wordpress.org/download/) currently using 4.2.2, code named "Benny Goodman" after the jazz
 singer, for this repository
* [Timber's TWIG Plug-In zipped](http://wordpress.org/plugins/timber-library/) 
or [Timber from the Repository](https://github.com/jarednova/timber) for the bleeding edge

## Theme Creation Tutorial ~ Lite

We will begin with a simple approach, for the sake of knowing the basics, and then we will move towards revamping the 
theme into using TWIG templates. For the sake of keeping theme names unique, we will begin with the lunar month of 
August and September with the prefix of "Web"; WebElul's [template code is here](http://github.com/kedweber/wordpress_theme_tut/wp-content/themes/webelul) and 
[static renderings](http://kedweber.github.io/wordpress_theme_tut) are viewable from the project's main page.

### Generalities of WordPress Themes

We have themes and [child themes](http://codex.wordpress.org/Child_Themes). A child theme borrows attributes, functions, styles and basically everything from its 
parent theme. Any theme can be a parent theme. Everything which one codes into a child theme will override and take 
precedence over the parent theme's attributes. 

Both parental and child theme files are located under the same directory structure. Both should be placed in a 
subdirectory in your WP site's webroot with the following path's nomenclature:
 
```
./wp-content/themes/nameOfYourTheme
```

#### Child Theme Creation Specifics

Here is the link to the [official and more detailed documentation on creating Child Themes](http://codex.wordpress.org/Child_Themes).

##### The style.css file's role in child themes

The `style.css` file in the child theme will dictate which theme is the parent theme, which keeps us from having to fork 
a parental theme without loosing any alterations. The following is an example of the header used within the style.css file to extend 
the parent. This would extend the *Template:* specified here as *twentyfifteen* refers to the directory containing 
the parent theme: 

```php
/*
 Theme Name:   Twenty Fifteen Child
 Theme URI:    http://example.com/twenty-fifteen-child/
 Description:  Twenty Fifteen Child Theme
 Author:       John Doe
 Author URI:   http://example.com
 Template:     twentyfifteen
 Version:      1.0.0
 License:      GNU General Public License v2 or later
 License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 Tags:         light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
 Text Domain:  twenty-fifteen-child
*/
```

It is not a de facto standard, but it is advised to name your child themes with the suffix of `-child`.

##### The functions.php file's role in child themes

In order to load the parent's style sheet, we have to add something like the following function to the functions.php's 
file. This will enqueue the parent's main style sheet.

```php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
```

@TODO rewrite this function to read out of the parent theme's directory, when existing, and loop through any additional 
style sheets other than `style.css`.

### A Theme's File Structure

A WordPress \(WP\) theme, in its barebones state, could include the following files (note the indented files are not required);

  * archive.php – for various types of archives
      * comments.php – the comment code
      * content.php – code for outputting content
      * content-single.php – code for outputting content on single posts
      * content-page.php – code that can be used for outputting content on pages
  * footer.php – the site footer
  * functions.php – code that can be used for registering features and functions
  * header.php – the site header
  * index.php – main fallback template
      * nav-bottom.php – code for including navigational elements in your theme
  * page.php – for single pages
  * screenshot.png – for admin purposes
  * sidebar.php – the side column
  * single.php – for single posts
  * style.css – theme declaration and CSS


Place holder files, if you wish to at least have all the files we wish to elaborate upon and within, the copy those out of the 
[barebones directory](http://github.com/kedweber/wordpress_theme_tut/wp-content/themes/barebones).

<We will need some [sample code](http://filesilo.co.uk/webdesigner) in order to work through this.>

Let's create the `header.php`, `footer.php` and `style.css` files. As you probably assume, the header.php will contain all 
 your static HTML regarding the contents of the `head` and `/head` tags, while our footer.php will contain all static HTML 
 related to the lower content of your website. The style.css is also what you would expect, it contains all your CSS and is 
 most likely referenced by a link tag within your header.php.

### Generalities of WordPress Scripting / Coding vs. Template Tags

WordPress is based on the popular multi-platform [PHP Engine](http://php.net); refer to their documentation. This document assumes you 
already have an understanding of PHP. We will step briefly through some of the most important concepts, but if PHP is 
not your forté, you plan never to use PHP or you're already very fluent with WordPress coding and template tags, then 
you'll be happy to continue to the following section on 
[Theme Frameworks & Starter Themes](https://github.com/kedweber/wordpress_theme_tut#generalities-of-wordpress-theme-frameworks--starter-themes) 
and that level of abstraction and simplification is what TWIG is all about.

Meanwhile, let us differentiate between Code and Template Tags. Code is just that, raw PHP code, while in WordPress jargon, tags are 
basically wrapper functions surrounding a collection of PHP Code. It is advised that you use the template tags where ever 
possible to avoid cross platform bugs and other issues which you will have discover as you recode the wheel.

Two simple examples of template tags are `blog_info()` and `the_tags()`. A [full listing of template tags] (http://codex.wordpress.org/Template_Tags) 
is available on the official WordPress site.

The following `blog_info()` when passed a specific fieldname, such as 'title' as a string parameter, then 
the tag will output the title into the HTML template.

```php
<?php blog_info('title') ?>
```

The `the_tags()` "template tag" \(or function\) has three default parameters; hence unnecessary unless you wish to customize 
the output other than as expressed in the code example below. This will return the prefix of 'Tag: ' followed by a 
comma delimited list of tags associated with the post and finally as shown here the suffix is an empty string denoted by 
the third parameter of ''.

```php
<?php the_tags(‘Tags: ‘, ‘, ‘, ‘’ ) ?>
```


@TODO Link to Codex.WordPress.org's template tags and functions.
 
### Generalities of WordPress Theme Frameworks & Starter Themes


## Resources

### Twig Template Markup In a Nutshell \(Cheatsheet\)

#### Installation of a RAW Twig Configuration \(not within the [WordPress](http://wordpress.org)\) framework

From the command prompt run the following command, for the *runtime environment*:

```bash
composer require twig/twig:~1.0
```

or if you've not created the alias then run the following; 

```bash
php /path/to/your/composer.php require twig/twig:~1.0
```

That is what you need for a rendering engine; however if you wish to run a development version then you will need to 
consider cloning the Twig repository from their address on [GitHub](http )


For a solid and thorough listing of [Twig syntax](http://twig.sensiolabs.org/documentation), visit [SensioLabs' documentation](http://twig.sensiolabs.org/documentation) website. 

| Subject \(version\) | Twig Markup | Output |
| ------------------- | ----------- | ------ |
| Capitalize | {{ 'my woman loves lollis' \| capitalize }} | My Woman Loves Lollis |
| Convert Encoding \(1.4+\)| {{ data\|convert_encoding\('UTF-8', 'iso-2022-jp') }} | Convert 2nd parameter to 1st parameter standard. |
| Date Formatting | {{ "now"\|date("Ymd") }} | Pipe a string value, or variable through what they call a filter. |
| Date " | {{ post.published_at\|date("Ymd", "Europe/Paris") }} | Pipe a variable through what they call a filter and force it into a non-standard timezone as the Optional Second Parameter. |
| Date " | {{ "now"\|date("Ymd") }} | Example of the `\\` escape character in the date function to render embedded text in the output. |
| Date Modification | {{ marriage.when_you_trusted\|date_modify("+8 years")\|date('YMd') }} | Add arbitrary time spans to your date formation. |



# And Now for Something Completely Different

###  GitHub Related Tools

* [Swapping GitHub Accounts](http://arnaudrinquin.github.io/worflow/2014/03/11/fast-github-account-switch/) 
on the fly.

### Web Design

* [istyle RECRUIT](recruit.istyle.co.jp) designed by [SHIFTBRAIN Inc.](http://shiftbrain.co.jp).
* [Omnisense Experience](http://experience.omnisense.net) designed by [Louis Ansa, Florian Morel, Corentin Bac, Simeon Artamonov](http://www.lousiansa.com)
* [Guillaume Bouvet](http://guillaumebouvet.net) designed by [REZO ZERO](http://www.rezo-zero.com)
* [Jack Daniel's: The Few & Far Between](http://barstories.jackdaniels.com) designed by [Arnold Worldwide](http://arn.com)-[MediaMonks](http://mediamonks.com)
 
* [Emmet Cheat Sheets](http://docs.emmet.io/cheat-sheet/) for your IDEs; including Sublime Text and PHPStorm
 
 
