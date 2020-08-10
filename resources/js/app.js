/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./custom/jquery.min.js');
require('./bootstrap');
require('./custom/bootstrap.bundle.min.js');

// AdminLTE component
// require('admin-lte');
require('admin-lte/plugins/datatables/jquery.dataTables.min.js')
require('admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')
require('admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')
require('admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')
require('admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')
require('./custom.js')
// Market component
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
