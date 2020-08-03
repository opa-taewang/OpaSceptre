/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 WebFontConfig = {
     google: {
         families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700']
     }
 };
 (function (d) {
     var wf = d.createElement('script'),
         s = d.scripts[0];
     wf.src = '/js/webfont.js';
     wf.async = true;
     s.parentNode.insertBefore(wf, s);
 })(document);
require('./custom/jquery.min.js');
require('./bootstrap');
// require('./custom/bootstrap.bundle.min.js');
require('./custom/plugins.min.js');
require('./custom/jquery.appear.min.js');
// require('./custom/nouislider.min.js');
require('./custom/main.min.js');


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
