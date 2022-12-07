import { createRouter, createWebHistory } from "vue-router";
import Home from "../src/pages/Home/Home.vue"


const routes = [
    {
      path: "/",
      component: Home,
    },
    {
      path: "/sign-in",
      component: () => import("../src/pages/SignIn/SignIn.vue"),
    },
    {
      path: "/sign-up",
      component: () => import("../src/pages/SignUp/SignUp.vue"),
    },
    {
      path: "/my-profile",
      component: () => import("../src/pages/MyProfile/MyProfile.vue"),
    },
    {
      path: "/feed",
      component: () => import("../src/pages/Feed/Feed.vue"),
    },
    {
      path: "/dj-profile",
      component: () => import("../src/pages/DjProfile/DjProfile.vue"),
    },
    {
      path: "/all-djs",
      component: () => import("../src/pages/AllDjs/AllDjs.vue"),
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