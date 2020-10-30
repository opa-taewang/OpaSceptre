/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./custom/jquery.min.js');
require('./bootstrap');
require('./custom/bootstrap.bundle.min.js');
require('./custom/bootstrap-input-spinner.js');

// AdminLTE component
require('admin-lte');
require('admin-lte/plugins/datatables/jquery.dataTables.min.js')
require('admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')
require('admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')
require('admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')
require('admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')
require('admin-lte/plugins/summernote/summernote-bs4.min.js')

// Sweet Alert
require("sweetalert")
// Market component
require('./custom/plugins.min.js');
require('./custom/jquery.appear.min.js');
// Tags Input
require('./custom/tagsinput.js')
// require('./custom/nouislider.min.js');
require('./custom/main.min.js');
// Dashboard 1
// require('./admin/js/pages/dashboard.js');
// require('./admin/js/demo.js');
// // Required plugins
// //jQuery UI 1.11.4 -->
// require('./admin/plugins/jquery-ui/jquery-ui.min.js');
// // Resolve conflict in jQuery UI tooltip with Bootstrap tooltip
// $.widget.bridge('uibutton', $.ui.button)
// // ChartJS
// require('./admin/plugins/chart.js/Chart.min.js');
// // Sparkline
// require('./admin/plugins/sparklines/sparkline.js');
// // JQVMap-- >
// require('./admin/plugins/jqvmap/jquery.vmap.min.js');
// require('./admin/plugins/jqvmap/maps/jquery.vmap.usa.js');
// // jQuery Knob Chart-- >
// require('./admin/plugins/jquery-knob/jquery.knob.min.js');
// // daterangepicker-- >
// require('admin-lte/plugins/moment/moment.min.js');
// require('./admin/plugins/daterangepicker/daterangepicker.js');
// // Tempusdominus Bootstrap 4-- >
// require('./admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');
// // Summernote-- >
// require('./admin/plugins/summernote/summernote-bs4.min.js');
// // overlayScrollbars-- >
// require('./admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');
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
Vue.component('product-status', require('./components/productStatus.vue').default);
Vue.component('add-to-cart', require('./components/addToCart.vue').default);
Vue.component('add-to-cart-one', require('./components/addToCartOne.vue').default);
Vue.component('add-to-wishlist', require('./components/addToWishlist.vue').default);
Vue.component('update-cart', require('./components/updateCart.vue').default);
Vue.component('add-address', require('./components/addAddress.vue').default);
Vue.component('update-address', require('./components/updateAddress.vue').default);
Vue.component('default-address', require('./components/makeDefaultAddress.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Custom file input

const app = new Vue({
    el: '#app',
});
// Custom Javascript
require('./custom.js')


