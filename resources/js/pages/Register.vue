<template>
    <div
        class="flex min-h-screen flex-col justify-center py-12 sm:px-6 lg:px-8"
    >
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img
                class="mx-auto h-12 w-auto"
                src="../../img/logo.png"
                alt="Your Company"
            />
            <h2
                class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900"
            >
                Inregistrare in platforma
            </h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form
                    action="javascript:void(0)"
                    @submit="register"
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
                                v-model="user.email"
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
                            for="denumire_firma"
                            class="block text-sm font-medium text-gray-700"
                            >Denumire companie</label
                        >
                        <div class="mt-1">
                            <input
                                v-model="user.denumire_firma"
                                id="denumire_firma"
                                name="denumire_firma"
                                type="text"
                                autocomplete="denumire_firma"
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
                                v-model="user.password"
                                id="password"
                                name="password"
                                type="password"
                                autocomplete="current-password"
                                required=""
                                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            />
                        </div>
                    </div>

                    <div>
                        <label
                            for="password_confirmation"
                            class="block text-sm font-medium text-gray-700"
                            >Confirma parola</label
                        >
                        <div class="mt-1">
                            <input
                                id="password_confirmation"
                                v-model="user.password_confirmation"
                                name="password_confirmation"
                                type="password"
                                autocomplete="password_confirmation"
                                required=""
                                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            />
                        </div>
                    </div>
                    <div>
                        <button
                            @click="register"
                            type="submit"
                            :disabled="processing"
                            class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                            {{ processing ? "Se incarca.." : "Inregistrare" }}
                        </button>
                    </div>
                </form>
                <p class="mt-2 text-center text-sm text-gray-600">
                    <label
                        >Ai deja un cont?
                        <router-link
                            :to="{ name: 'login' }"
                            class="font-medium text-indigo-600 hover:text-indigo-500"
                            >Autentifica-te acum!</router-link
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
    name: "register",
    setup() {
        const toast = useToast();

        return { toast };
    },
    data() {
        return {
            user: {
                denumire_firma: "",
                email: "",
                password: "",
                password_confirmation: "",
            },
            validationErrors: {},
            processing: false,
        };
    },
    methods: {
        ...mapActions({
            signIn: "auth/login",
        }),
        async register() {
            this.processing = true;
            await axios.get("/sanctum/csrf-cookie");
            await axios
                .post("/register", this.user)
                .then((response) => {
                    this.validationErrors = {};
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
