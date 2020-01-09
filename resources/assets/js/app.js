
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueAxios from 'vue-axios';
import axios from 'axios';

require('./bootstrap');

window.Vue = require('vue');
Vue.use(VueAxios, axios);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('add-coin', require('./components/AddCoin'));
Vue.component('chart-component', require('./components/ChartComponent'));

const app = new Vue({
    el: '#app'
});
