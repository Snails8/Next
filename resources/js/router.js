import Vue from 'vue'
import VueRouter from 'vue-router'

import Login from './pages/Login.vue'

Vue.use(vueRouter)

const routes = [
    {
        path: '/login',
        component: Login   
    }
]

const router = new vueRouter({
    routes
})

export default router 