# Changelog

## Future realase

* NPM Packages:
    * Update:
        * ``grunt-contrib-cssmin`` 0.10.0 *(for keep banner option)*
* Sass:
    * Vendor folder
    * Underscore in path deleted
* Functions:
    * ``ERROR_CLASS`` refactor

## 3.0.0

* NPM Packages:
    * Deleted:
        * ``glob``
        * ``grunt-contrib-clean``
        * ``grunt-contrib-sass``
        * ``load-grunt-tasks``
    * Add:
        * ``grunt-contrib-jshint`` 0.11.0
        * ``grunt-sass`` 0.17.0
        * ``load-grunt-config`` 0.16.0 *(#10)*
        * ``time-grunt`` 1.0.0
* Grunt:
    * Move config files on new folder
    * ``load-grunt-config`` replace ``glob`` and ``load-grunt-tasks`` *(#10)*
    * Add ``time-grunt`` plugin
    * Add ``jshint`` task
    * Delete ``clean`` task
* JavaScript:
    * jQuery update to 1.11.2
    * Modernizr remove from ``bower.json``
    * Fix syntax *(#15)*
* Bower:
    * Change directory structure
* Functions:
    * Vendor assets
* CSS:
    * Sass files news structures
    * Add normalize by default
    * Print default CSS update
* PHP:
    * Fix PHP bug risk *(#13, #14)*
* Global comments update
* Global clean code

## 2.2.3

* NPM Packages:
    * ``glob`` 4.3.2
    * ``grunt-contrib-cssmin`` 0.11.0
    * ``grunt-contrib-uglify`` 0.7.0
    * ``load-grunt-tasks`` 2.0.0
    
## 2.2.2

* NPM Packages:
    * ``grunt-bowercopy`` 1.2.0
    * ``grunt-bower-concat`` deleted
* Grunt tasks:
    * ``bower``: Run Bower and copy libs on vendors folders
    
## 2.2.1

* Functions:
    * Lorem function update
    * Error class
* NPM Packages:
    * ``glob`` 4.3.1
* CSS:
    * Forms error

## 2.2.0

* New name
* Grunt:
    * CSS minify banner option
    * ``load-grunt-tasks`` 1.0.0
* Global comments update

## 2.1.0

* Functions:
    * Using PHP constant *([#5](https://github.com/agenceepsilon/meduseld-boilerplate/issues/5))*
    * Add version on assets for kill browser cache *([#6](https://github.com/agenceepsilon/meduseld-boilerplate/issues/6))*
* Grunt:
    * Global URL variables *([#7](https://github.com/agenceepsilon/meduseld-boilerplate/issues/7))*
    * ``version`` task
    * ``clean`` task
    * ``uglify``: banner option
* NPM Packages:
    * ``grunt-bower_concat`` 0.4.0
    * ``grunt-browser-uglify`` 0.6.0
    * ``grunt-contrib-clean`` added
* Comments spaces fix

## 2.0.0

* Compass: no need to use it to generate CSS
* Functions:
    * Choose the environment you want to test:
        * ``local``: load CSS and JS files uncompressed.
        * ``prod``: load CSS and JS files compressed.
* NPM Packages:
    * ``glob`` 4.0.6
    * ``grunt-bower_concat`` added
    * ``grunt-contrib-sass`` added
    * ``grunt-contrib-concat`` added
    * ``grunt-contrib-cssmin`` added
    * ``grunt-browser-uglify`` added
    * ``grunt-browser-sync`` deleted
* Grunt tasks:
    * ``grunt`` or ``grunt default``: launch ``watch`` plugin
    * ``grunt theme``: generate CSS files
    * ``grunt mincss``: minify CSS files
    * ``grunt minjs``: concat and minify JS files
* CSS:
    * Editor:
        * Default ``h1`` title style

## 1.2.11

* NPM Packages updates:
    * ``grunt-browser-sync`` 1.3.7
    * ``grunt-contrib-compass`` 1.0.1

## 1.2.10

* Clean ``.js-`` class unused
* CSS:
    * Editor:
        * Default CSS zone for ``bold`` and ``italic`` styles
        * New default colors for tables
* Functions:
    * Comments updates
* NPM Packages updates:
    * ``grunt-browser-sync`` 1.3.6

## 1.2.9

* Functions:
    * Enable/disable BrowerSync with ``true`` or ``false`` option directly in function.php
    * Update BrowserSync version on script in footer automatically with php
* Compass:
    * SourceMap option
* NPM Packages updates:
    * ``grunt-browser-sync`` 1.3.5

## 1.2.8

* CSS:
    * ``box-sizing`` on all elements by default
    * Small CSS reordering
* JavaScript:
    * Move jQuery Not Ready call
    * Fix URL issue
* NPM Packages updates:
    * ``glob`` 4.0.5
    * ``grunt-browser-sync`` 1.3.2
    * ``grunt-contrib-compass`` 0.9.1

## 1.2.7

* Comments in English ([#1](https://github.com/agenceepsilon/meduseld-boilerplate/issues/1))
* Bower Packages updates:
    * ``Modernizr`` 2.8.3
* NPM Packages updates:
    * ``glob`` 4.0.4
    * ``grunt-browser-sync`` 1.3.0 ([#2](https://github.com/agenceepsilon/meduseld-boilerplate/issues/2))
* PHP small optimization

## 1.2.6

* NPM Packages updates:
    * ``load-grunt-tasks`` 0.6.0
    * ``grunt-contrib-compass`` 0.9.0

## 1.2.5

* NPM Packages updates:
    * ``load-grunt-tasks`` 0.5.0
* HTML/CSS:
    * With backgound by default
    * Delete ``clearfix`` on ``p``

## 1.2.4

* NPM Packages updates:
    * ``glob`` 4.0.2
* Bower:
    * jQuery notReady 0.1.0
* Compass
    * assetCacheBuster ``false`` by default

## 1.2.3

* NPM Packages updates:
    * ``glob`` 4.0.0
* Viewport rollback

## 1.2.2

* NPM Packages updates:
    * ``grunt-contrib-compass`` 0.8.0

## 1.2.1

* NPM Packages updates:
    * ``grunt`` 0.4.5
    * ``grunt-browser-sync`` 0.9.1

## 1.2.0

* Removal of the requirement of the class ``.editor`` for WYSIWYG style
* Bower updates to latest dependencies versions
* Cleaning HTML/CSS

## 1.1.0

* Grunt:
    * Separation on unique file for each tasks
* Bower:
    * ``sass-mercury`` replace ``meduseld``
* Forms:
    * New HTML structure
* Cleaning HTML/CSS
* PHP Optimization

## 1.0.0

* Stable release