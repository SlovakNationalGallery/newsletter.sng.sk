require('./bootstrap');

import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'

import App from './App.vue'
import Intro from './views/Intro.vue'
import Subscribe from './views/Subscribe.vue'

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

