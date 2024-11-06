import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";
import Profile from "@/views/Profile.vue";
import Welcome from "@/components/Welcome.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "Welcome",
      component: Welcome,
    },
    {
      path: "/home",
      name: "Home",
      component: Home,
    },
    {
      path: "/profile",
      name: "Profile",
      component: Profile,
    },
  ],
});

export default router;
