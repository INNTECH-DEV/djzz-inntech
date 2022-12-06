import "./bootstrap";
import "../sass/app.scss";
import "../css/app.css";
import Router from "@/router";
import store from "@/store";
import "vue-toastification/dist/index.css";
import Toast from "vue-toastification";
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";
import ClientSidebar from "./components/client/ClientSidebar.vue";

import { createHead } from "@vueuse/head";

import { createApp } from "vue/dist/vue.esm-bundler";

const app = createApp({});
const head = createHead();

app.use(Router);
app.use(store);
app.use(head);
app.use(Toast);
app.mount("#app");

app.component("Header", Header);
app.component("Footer", Footer);
app.component("ClientSidebar", ClientSidebar);
