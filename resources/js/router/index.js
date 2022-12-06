import { createWebHistory, createRouter } from "vue-router";
import store from "@/store";

/* Guest Component */
const Login = () => import("@/pages/Login.vue");
const Register = () => import("@/pages/Register.vue");
/* Guest Component */

/* Authenticated Component */
const Dashboard = () => import("@/pages/Dashboard.vue");
const Client = () => import("@/pages/Client.vue");
const Settings = () => import("@/pages/Settings.vue");
const TestPage = () => import("@/pages/TestPage.vue");
const PageNotFound = () => import("@/pages/PageNotFound.vue");
const InCurand = () => import("@/pages/InCurand.vue");

const ClientDataTab = () => import("@/components/client/ClientDataTab.vue");
const ClientFilesTab = () => import("@/components/client/ClientFilesTab.vue");
const ClientCommentsTab = () =>
    import("@/components/client/ClientCommentsTab.vue");

/* Authenticated Component */

const routes = [
    {
        name: "login",
        path: "/login",
        component: Login,
        meta: {
            middleware: "guest",
            title: `Login`,
        },
    },
    {
        name: "register",
        path: "/register",
        component: Register,
        meta: {
            middleware: "guest",
            title: `Register`,
        },
    },
    {
        path: "/",
        component: Dashboard,
        name: "dashboard",
        meta: {
            middleware: "auth",
        },
    },
    {
        path: "/settings",
        component: Settings,
        name: "settings",
        meta: {
            middleware: "auth",
        },
    },
    {
        path: "/edit-client/:id",
        component: Client,
        name: "client",
        meta: {
            middleware: "auth",
        },
    },
    {
        path: "/edit-client/data/:id",
        component: ClientDataTab,
        name: "client-data",
        meta: {
            middleware: "auth",
        },
    },
    {
        path: "/edit-client/files/:id",
        component: ClientFilesTab,
        name: "client-files",
        meta: {
            middleware: "auth",
        },
    },
    {
        path: "/edit-client/comments/:id",
        component: ClientCommentsTab,
        name: "client-comments",
        meta: {
            middleware: "auth",
        },
    },
    {
        path: "/test-page",
        component: TestPage,
        name: "test-page",
        meta: {
            middleware: "auth",
        },
    },
    {
        path: "/rapoarte",
        component: InCurand,
        name: "rapoarte",
        meta: {
            middleware: "auth",
        },
    },
    { path: "/:pathMatch(.*)*", component: PageNotFound },
];

const router = createRouter({
    history: createWebHistory(),
    routes, // short for `routes: routes`
});

router.beforeEach((to, from, next) => {
    // document.title = to.meta.title;
    if (to.meta.middleware == "guest") {
        if (store.state.auth.authenticated) {
            next({ name: "dashboard" });
        }
        next();
    } else {
        if (store.state.auth.authenticated) {
            next();
        } else {
            next({ name: "login" });
        }
    }
});

export default router;
