require('./bootstrap');

window.Vue = require('vue');

Vue.component('sample-component',require('./component/Sample.vue').default);

const app = new Vue({
    el: '#app',
});