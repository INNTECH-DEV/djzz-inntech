import { createRouter, createWebHistory } from "vue-router";
import Home from "../src/pages/Home/Home.vue"


const routes = [
    {
      path: "/",
      component: Home,
    },
    {
      path: "/login",
      component: () => import("../src/pages/Login/Login.vue"),
    },
    {
      path: "/sign-up",
      component: () => import("../src/pages/SignUp/SignUp.vue"),
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior() {
      return { top: 0 };
    },
  });
  
  export default router;