# Meduseld Boilerplate [![GitHub version](https://badge.fury.io/gh/agenceepsilon%2Fmeduseld-boilerplate.png)](http://badge.fury.io/gh/agenceepsilon%2Fmeduseld-boilerplate) [![devDependency Status](https://david-dm.org/agenceepsilon/meduseld-boilerplate/dev-status.png)](https://david-dm.org/agenceepsilon/meduseld-boilerplate#info=devDependencies)

## Requirements

| Requirements                        | Versions |
| ----------------------------------- | -------- |
| [Sass](http://sass-lang.com)        | ~3.3.0   |
| [Compass](http://compass-style.org) | ~1.0.0   |
| [Node.js](http://nodejs.org)        | ~0.10.0  |
| [Grunt.js](http://gruntjs.com)      | ~0.4.5   |

## Grunt plugins

Use the ``npm`` command to download the Grunt dependencies : ``npm install``.

| Plugins                                                                   | Versions |
| ------------------------------------------------------------------------- | -------- |
| [glob](https://github.com/isaacs/node-glob)                               | ~4.0.5   |
| [load-grunt-tasks](https://github.com/sindresorhus/load-grunt-tasks)      | ~0.6.0   |
| [grunt-contrib-compass](https://github.com/gruntjs/grunt-contrib-compass) | ~0.9.1   |
| [grunt-contrib-watch](https://github.com/gruntjs/grunt-contrib-watch)     | ~0.6.1   |
| [grunt-browser-sync](https://github.com/shakyshane/grunt-browser-sync)    | ~1.3.5   |

## Bower packages

Use the ``bower`` command to download the Bower dependencies : ``bower install``.

| Libraries                                                     | Versions |
| ------------------------------------------------------------- | -------- |
| [jquery](http://jquery.com)                                   | ~1.11.1  |
| [jquery.notready](http://www.johansatge.fr/jquery-notready)   | ~0.1.0   |
| [modernizr](http://modernizr.com)                             | ~2.8.3   |
| [sass-mercury](https://github.com/agenceepsilon/sass-mercury) | ~1.1.0   |

## Changelog

### 1.2.9

* Functions:
    * Enable/disable BrowerSync with ``true`` or ``false`` option directly in function.php
    * Update BrowserSync version on script in footer automatically with php
* Compass:
    * SourceMap option
* NPM Packages updates:
    * ``grunt-browser-sync`` 1.3.5

### 1.2.8

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

### 1.2.7

* Comments in English ([#1](https://github.com/agenceepsilon/meduseld-boilerplate/issues/1))
* Bower Packages updates:
    * ``Modernizr`` 2.8.3
* NPM Packages updates:
    * ``glob`` 4.0.4
    * ``grunt-browser-sync`` 1.3.0 ([#2](https://github.com/agenceepsilon/meduseld-boilerplate/issues/2))
* PHP small optimization

### 1.2.6

* NPM Packages updates:
    * ``load-grunt-tasks`` 0.6.0
    * ``grunt-contrib-compass`` 0.9.0

### 1.2.5

* NPM Packages updates:
    * ``load-grunt-tasks`` 0.5.0
* HTML/CSS:
    * With backgound by default
    * Delete ``clearfix`` on ``p``

### 1.2.4

* NPM Packages updates:
    * ``glob`` 4.0.2
* Bower:
    * jQuery notReady 0.1.0
* Compass
    * assetCacheBuster ``false`` by default

### 1.2.3

* NPM Packages updates:
    * ``glob`` 4.0.0
* Viewport rollback

### 1.2.2

* NPM Packages updates:
    * ``grunt-contrib-compass`` 0.8.0

### 1.2.1

* NPM Packages updates:
    * ``grunt`` 0.4.5
    * ``grunt-browser-sync`` 0.9.1

### 1.2.0

* Removal of the requirement of the class ``.editor`` for WYSIWYG style
* Bower updates to latest dependencies versions
* Cleaning HTML/CSS

### 1.1.0

* Grunt:
    * Separation on unique file for each tasks
* Bower:
    * ``sass-mercury`` replace ``meduseld``
* Forms:
    * New HTML structure
* Cleaning HTML/CSS
* PHP Optimization

### 1.0.0

* Stable release