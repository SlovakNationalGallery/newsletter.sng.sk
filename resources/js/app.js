require('./bootstrap');

import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'

import App from './App.vue'
import Intro from './Intro.vue'
import Subscribe from './Subscribe.vue'

const routes = [
    { path: '/', component: Intro },
    { path: '/subscribe', component: Subscribe },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

const app = createApp(App)
app.use(router)
app.mount('#app')

