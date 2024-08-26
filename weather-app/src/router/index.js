import { createRouter, createWebHistory } from 'vue-router'
import WeatherPage from '../views/WeatherPage.vue';
import HistoryPage from '../views/HistoryPage.vue';

const routes = [
  {
    path: '/',
    name: 'WeatherPage',
    component: WeatherPage
  },
  {
    path: '/history',
    name: 'HistoryPage',
    component: HistoryPage
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
