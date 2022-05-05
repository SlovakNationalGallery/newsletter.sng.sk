require('./bootstrap');

import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'

import App from './App.vue'
import Intro from './views/Intro.vue'
import Subscribe from './views/Subscribe.vue'
import Success from './views/Success.vue'

const routes = [
    { path: '/', component: Intro },
    { path: '/subscribe', component: Subscribe },
    { path: '/success', component: Success },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

const app = createApp(App)
app.use(router)
app.mount('#app')


// redirect to intro when idle 1 min
let timeout
function refresh(){
  clearTimeout(timeout)
  timeout = setTimeout(() => {
    if (window.location.pathname !== '/') {
      window.location = window.location.origin + '?eraseCache=true'
    }
  }, 1 * 60 * 1000)
}
refresh()
document.addEventListener('click', refresh)