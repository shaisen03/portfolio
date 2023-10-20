import { createRouter, createWebHistory } from 'vue-router';
import navbarRoutes from './routes/navbar'

const routes = [
    ...navbarRoutes,
]

const router = new createRouter({
    history: createWebHistory(),
    routes
})

router.beforeEach((to, from, next) => {
    next();
})

export default router; 