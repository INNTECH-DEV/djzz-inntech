<template>
    <div
        class="flex min-h-screen flex-col justify-center py-12 sm:px-6 lg:px-8"
    >
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img
                class="mx-auto h-24 w-auto"
                src="../../img/logo.png"
                alt="Your Company"
            />
            <h2
                class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900"
            >
                Autentificare in cont
            </h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form
                    action="javascript:void(0)"
                    class="space-y-6"
                    method="post"
                >
                    <div>
                        <label
                            for="email"
                            class="block text-sm font-medium text-gray-700"
                            >Adresa de email</label
                        >
                        <div class="mt-1">
                            <input
                                v-model="auth.email"
                                id="email"
                                name="email"
                                type="email"
                                autocomplete="email"
                                required=""
                                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            />
                        </div>
                    </div>

                    <div>
                        <label
                            for="password"
                            class="block text-sm font-medium text-gray-700"
                            >Parola</label
                        >
                        <div class="mt-1">
                            <input
                                v-model="auth.password"
                                id="password"
                                name="password"
                                type="password"
                                autocomplete="current-password"
                                required=""
                                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            />
                        </div>
                    </div>

                    <!-- <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input
                                id="remember-me"
                                name="remember-me"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                            />
                            <label
                                for="remember-me"
                                class="ml-2 block text-sm text-gray-900"
                                >Remember me</label
                            >
                        </div>

                        <div class="text-sm">
                            <a
                                href="#"
                                class="font-medium text-indigo-600 hover:text-indigo-500"
                                >Forgot your password?</a
                            >
                        </div>
                    </div> -->

                    <div>
                        <button
                            :disabled="processing"
                            @click="login"
                            type="submit"
                            class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                            {{ processing ? "Se incarca.." : "Autentificare" }}
                        </button>
                    </div>
                </form>
                <p class="mt-2 text-center text-sm text-gray-600">
                    <label
                        >Nu ai un cont?
                        <router-link
                            :to="{ name: 'register' }"
                            class="font-medium text-indigo-600 hover:text-indigo-500"
                            >Inregistreaza-te acum!</router-link
                        ></label
                    >
                </p>
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions } from "vuex";
import { useToast } from "vue-toastification";

export default {
    name: "login",
    setup() {
        const toast = useToast();

        return { toast };
    },
    data() {
        return {
            auth: {
                email: "",
                password: "",
            },
            validationErrors: {},
            processing: false,
        };
    },
    methods: {
        ...mapActions({
            signIn: "auth/login",
        }),
        async login() {
            this.processing = true;
            await axios.get("/sanctum/csrf-cookie");
            await axios
                .post("/login", this.auth)
                .then(({ data }) => {
                    this.signIn();
                })
                .catch(({ response }) => {
                    if (response.status === 422) {
                        this.validationErrors = response.data.errors;
                    } else {
                        this.validationErrors = {};
                        alert(response.data.message);
                    }
                    this.toast.error(JSON.stringify(response.data.message));
                })
                .finally(() => {
                    this.processing = false;
                });
        },
    },
};
</script>
