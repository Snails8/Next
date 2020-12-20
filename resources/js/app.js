import './bootstrap'
import Vue from 'vue'
import Sample from './components/Sample'
import App from './App.vue'

import VCalendar from 'v-calendar'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.js'
import vuetifyMin from 'vuetify/dist/vuetify.min.js'

Vue.use(Vuetify)
Vue.use(VCalendar)

Vue.config.productionTip = false

Vue.component('sample-component',require('./components/Sample.vue').default);
Vue.component('calendar-component', required('./components/CalendarComponent.vue').default);

new Vue({
    render: h => h(App),
}).$mount('#app')

const app = new Vue({
    el: '#app',
    components: {
        Sample
    },
    vuetify: new Vuetify({

    }),
});