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
theme into using TWIG templates:

### 1) File Creation

We will need some [sample code](http://filesilo.co.uk/webdesigner) in order to work through this.

Let's create the `header.php`, `footer.php` and `style.css` files. As you probably assume, the header.php will contain all 
 your static HTML regarding the contents of the <head> and </head> tags, while our footer.php will contain all static HTML 
 related to the lower content of your website. The style.css is also what you would expect, it contains all your CSS and is 
 most likely referenced by a link tag within your header.php.


## Resources

### Twig Template Markup In a Nutshell \(Cheatsheet\)

| Subject \(version\) | Twig Markup | Output |
| ------------------- | ----------- | ------ |
| Capitalize | {{ 'my woman loves lollis' | capitalize }} | My Woman Loves Lollis |
| Convert Encoding \(1.4+\)| {{ data|convert_encoding\('UTF-8', 'iso-2022-jp' }} | Convert 2nd parameter to 1st parameter standard |


###  GitHub Related Tools

* [Swapping GitHub Accounts](http://arnaudrinquin.github.io/worflow/2014/03/11/fast-github-account-switch/) 
on the fly.

### Web Design

* [istyle RECRUIT](recruit.istyle.co.jp) designed by [SHIFTBRAIN Inc.](http://shiftbrain.co.jp).
* [Omnisense Experience](http://experience.omnisense.net) designed by [Louis Ansa, Florian Morel, Corentin Bac, Simeon Artamonov](http://www.lousiansa.com)
* [Guillaume Bouvet](http://guillaumebouvet.net) designed by [REZO ZERO](http://www.rezo-zero.com)
* [Jack Daniel's: The Few & Far Between](http://barstories.jackdaniels.com) designed by [Arnold Worldwide](http://arn.com)-[MediaMonks](http://mediamonks.com)
 
* [Emmet Cheat Sheets](http://docs.emmet.io/cheat-sheet/) for your IDEs; including Sublime Text and PHPStorm
 
 
