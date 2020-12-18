import './bootstrap'
import Vue from 'vue'

import Sample from './components/Sample'

Vue.component('sample-component',require('./components/Sample.vue').default);

const app = new Vue({
    el: '#app',
    component: {
        Sample 
    }
});