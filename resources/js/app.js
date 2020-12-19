import './bootstrap'
import Vue from 'vue'
import Sample from './components/Sample'

import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.js'
import vuetifyMin from 'vuetify/dist/vuetify.min.js'

Vue.use(Vuetify)

Vue.component('sample-component',require('./components/Sample.vue').default);
Vue.component('calendar-component', required('./components/CalendarComponent.vue').default);

const app = new Vue({
    el: '#app',
    components: {
        Sample
    },
    vuetify: new Vuetify({

    }),
});