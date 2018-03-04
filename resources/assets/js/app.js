
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
// require('./layout');

import 'vue-instant/dist/vue-instant.css'
import VueInstant from 'vue-instant/dist/vue-instant.common'
import Autocomplete from 'vue2-autocomplete-js'

window.Vue = require('vue');
// window.Vue.use(VueInstant)

window.axios = require('axios');


// window.axios.defaults.headers.common = {
//     'X-CSRF-TOKEN': window.Laravel.csrfToken,
//     'X-Requested-With': 'XMLHttpRequest'
// };

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('typeahead', require('./components/shared/typeahead/typeahead.vue'));
Vue.component('home', require('./components/unique-instance/home/home.vue'));


const app = new Vue({
    el: '#app'
});
