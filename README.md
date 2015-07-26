# Free Word Press Theme & Terse Tutorial (wordpress_theme_tut)

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

## Theme Creation Tutorial

We will begin with a simple approach, for the sake of knowing the basics, and then we will move towards revamping the 
theme into using TWIG templates. For the sake of keeping theme names unique, we will begin with the lunar month of 
August and September with the prefix of "Web"; WebElul's [template code is here](wp-content/themes/webelul) and 
[static renderings](http://kedweber.github.io/wordpress_theme_tut) are viewable from the project's main page.

### 1) File Creation

A WordPress \(WP\) theme, in its barebones state, minimally needs the following files;

  * style.css – theme declaration and CSS
  * index.php – main fallback template
  * header.php – the site header
  * footer.php – the site footer
  * sidebar.php – the side column
  * single.php – for single posts
  * page.php – for single pages
  * archive.php – for various types of archives
  * content.php – code for outputting content
  * content-single.php – code for outputting content on single posts
  * content-page.php – code that can be used for outputting content on pages
  * nav-bottom.php – code for including navigational elements in your theme
  * comments.php – the comment code
  * functions.php – code that can be used for registering features and functions
  * screenshot.png – for admin purposes 

and these should be placed in a subdirectory in your WP site's webroot with the following path's nomenclature:

```
wp-content/themes/nameOfYourTheme
```

<We will need some [sample code](http://filesilo.co.uk/webdesigner) in order to work through this.>

Let's create the `header.php`, `footer.php` and `style.css` files. As you probably assume, the header.php will contain all 
 your static HTML regarding the contents of the `head` and `/head` tags, while our footer.php will contain all static HTML 
 related to the lower content of your website. The style.css is also what you would expect, it contains all your CSS and is 
 most likely referenced by a link tag within your header.php.


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


For a solid and through listing of [Twig syntax](http://twig.sensiolabs.org/documentation), visit [SensioLabs' documentation](http://twig.sensiolabs.org/documentation) website. 

| Subject \(version\) | Twig Markup | Output |
| ------------------- | ----------- | ------ |
| Capitalize | {{ 'my woman loves lollis' \| capitalize }} | My Woman Loves Lollis |
| Convert Encoding \(1.4+\)| {{ data\|convert_encoding\('UTF-8', 'iso-2022-jp') }} | Convert 2nd parameter to 1st parameter standard. |
| Date Formatting | {{ "now"\|date("Ymd") }} | Pipe a string value, or variable through what they call a filter. |
| Date " | {{ post.published_at\|date("Ymd", "Europe/Paris") }} | Pipe a variable through what they call a filter and force it into a non-standard timezone as the Optional Second Parameter. |
| Date " | {{ "now"\|date("Ymd") }} | Example of the `\\` escape character in the date function to render embedded text in the output. |
| Date Modification | {{ marriage.when_you_trusted\|date_modify("+8 years")\|date('YMd') }} | Add arbitrary time spans to your date formation. |



###  GitHub Related Tools

* [Swapping GitHub Accounts](http://arnaudrinquin.github.io/worflow/2014/03/11/fast-github-account-switch/) 
on the fly.

### Web Design

* [istyle RECRUIT](recruit.istyle.co.jp) designed by [SHIFTBRAIN Inc.](http://shiftbrain.co.jp).
* [Omnisense Experience](http://experience.omnisense.net) designed by [Louis Ansa, Florian Morel, Corentin Bac, Simeon Artamonov](http://www.lousiansa.com)
* [Guillaume Bouvet](http://guillaumebouvet.net) designed by [REZO ZERO](http://www.rezo-zero.com)
* [Jack Daniel's: The Few & Far Between](http://barstories.jackdaniels.com) designed by [Arnold Worldwide](http://arn.com)-[MediaMonks](http://mediamonks.com)
 
* [Emmet Cheat Sheets](http://docs.emmet.io/cheat-sheet/) for your IDEs; including Sublime Text and PHPStorm
 
 
