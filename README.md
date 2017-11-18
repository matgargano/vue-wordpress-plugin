Vue WordPress Plugin
===

I created this as a starting point for developing using [VueJS](https://vuejs.org/) within WordPress.

It provides out of the box:
 - VueJS
 - NPM tasks for building and watching for both production and development
 

Getting started
---

- Pull this into the plugins directory of your project either by cloning or using composer. Make sure you have [Node.js](https://nodejs.org/) and [Composer](https://getcomposer.org) installed. 
- Run `npm install`
- Run `composer install`
- For `production` Run `npm run build`
- For `local` Run `npm run build:local` to build the JS or `npm run build:local:watch` to watch JS files and build on the fly 
- Activate the plugin
- Add a `<div id="app"></div>` into your project and the sample application, it's not very exciting but it's a way to quickly scaffold a VueJS plugin.

Note
---
I may not be the greatest with ES6, feel free to fork or issue a pull request if I've written anything against convention.  


