Vue WordPress Plugin
===

I created this as a starting point for developing using [VueJS](https://vuejs.org/) within WordPress.

It provides out of the box:
 - VueJS
 - Browserify tasks for building and watching for both production and development
 

Getting started
---

- Pull this into the plugins directory of your project either by cloning or using composer. Make sure you have [Node.js](https://nodejs.org/) and [Browserify](http://browserify.org/browserify) installed. 
- Run `npm install`
- Run `npm build build-js` or `npm run build-js-dev` depending on your environment.
- Activate the plugin
- Add a `<div id="app"></div>` into your project and the sample application, it's not very exciting but it's a way to quickly scaffold a VueJS plugin.

Note
---
I may not be the greatest with Browserify/ES6, feel free to fork or issue a pull request if I've written anything against convention.  


