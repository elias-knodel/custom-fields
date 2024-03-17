import {createRouter, createWebHistory} from 'vue-router';
import userRoutes from '@/router/user';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    // {
    //   path: '/',
    //   name: 'home',
    //   component: () => import('@/App.vue')
    // },
    ...userRoutes,
  ]
})

export default router
