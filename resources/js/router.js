import { createRouter, createWebHistory } from "vue-router";
import Home from './Components/Home.vue';
import Task from './Components/Task.vue';
import Show from './Components/Show.vue';

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/tasks',
    name: 'tasks',
    component: Task
  },
  {
    path: '/tasks/:id',
    name: 'show',
    component: Show
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;