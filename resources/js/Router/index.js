import { createRouter, createWebHistory } from 'vue-router'
import Home from '../Pages/Landing.vue' // o el nombre real
import About from '../Pages/Profile.vue'

const routes = [
    { path: '/', component: Landing  },
    { path: '/profile', component: Profile },
]

export default createRouter({
    history: createWebHistory(),
    routes
})