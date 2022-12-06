<template>
    <Disclosure as="nav" class="bg-white shadow" v-slot="{ open }">
        <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8">
            <div class="flex h-16 justify-between">
                <div class="flex px-2 lg:px-0">
                    <div class="flex flex-shrink-0 items-center">
                        <router-link :to="{ name: 'dashboard' }">
                            <img
                                class="block h-12 w-auto lg:hidden"
                                src="../../img/logo.png"
                                alt="Your Company"
                            />
                        </router-link>

                        <router-link :to="{ name: 'dashboard' }">
                            <img
                                class="hidden h-12 w-auto lg:block"
                                src="../../img/logo.png"
                                alt="Your Company"
                            />
                        </router-link>
                    </div>
                    <div class="hidden lg:ml-6 lg:flex lg:space-x-8">
                        <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                        <!-- <router-link
                            :to="{ name: 'dashboard' }"
                            class="inline-flex items-center border-b-2 border-indigo-500 px-1 pt-1 text-sm font-medium text-gray-900"
                            >Panou de control</router-link
                        > -->
                        <router-link
                            :to="{ name: 'dashboard' }"
                            class="inline-flex items-center border-b-2 border-indigo-500 px-1 pt-1 text-sm font-medium text-gray-900"
                            >Clienti</router-link
                        >
                        <router-link
                            :to="{ name: 'rapoarte' }"
                            class="inline-flex items-center border-indigo-500 px-1 pt-1 text-sm font-medium text-gray-900"
                            >Rapoarte</router-link
                        >
                    </div>
                </div>
                <div
                    class="flex flex-1 items-center justify-center px-2 lg:ml-6 lg:justify-end"
                >
                    <!-- <div class="w-full max-w-lg lg:max-w-xs">
                        <label for="search" class="sr-only">Cauta</label>
                        <div class="relative">
                            <div
                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                            >
                                <MagnifyingGlassIcon
                                    class="h-5 w-5 text-gray-400"
                                    aria-hidden="true"
                                />
                            </div>
                            <input
                                id="search"
                                name="search"
                                class="block w-full rounded-md border border-gray-300 bg-white py-2 pl-10 pr-3 leading-5 placeholder-gray-500 focus:border-indigo-500 focus:placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm"
                                placeholder="Cauta"
                                type="search"
                            />
                        </div>
                    </div> -->
                </div>
                <div class="flex items-center lg:hidden">
                    <!-- Mobile menu button -->
                    <DisclosureButton
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    >
                        <span class="sr-only">Open main menu</span>
                        <Bars3Icon
                            v-if="!open"
                            class="block h-6 w-6"
                            aria-hidden="true"
                        />
                        <XMarkIcon
                            v-else
                            class="block h-6 w-6"
                            aria-hidden="true"
                        />
                    </DisclosureButton>
                </div>
                <div class="hidden lg:ml-4 lg:flex lg:items-center">
                    <!-- <button
                        type="button"
                        class="flex-shrink-0 rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        <span class="sr-only">View notifications</span>
                        <BellIcon class="h-6 w-6" aria-hidden="true" />
                    </button> -->

                    <!-- Profile dropdown -->
                    <Menu as="div" class="relative ml-4 flex-shrink-0">
                        <div>
                            <MenuButton
                                class="flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            >
                                <span class="sr-only">Open user menu</span>
                                {{ user.denumire_firma }}
                            </MenuButton>
                        </div>
                        <transition
                            enter-active-class="transition ease-out duration-100"
                            enter-from-class="transform opacity-0 scale-95"
                            enter-to-class="transform opacity-100 scale-100"
                            leave-active-class="transition ease-in duration-75"
                            leave-from-class="transform opacity-100 scale-100"
                            leave-to-class="transform opacity-0 scale-95"
                        >
                            <MenuItems
                                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            >
                                <MenuItem v-slot="{ active }">
                                    <router-link
                                        :to="{ name: 'settings' }"
                                        :class="[
                                            active ? 'bg-gray-100' : '',
                                            'block px-4 py-2 text-sm text-gray-700',
                                        ]"
                                        >Setari cont</router-link
                                    >
                                </MenuItem>
                                <MenuItem v-slot="{ active }">
                                    <a
                                        href="#"
                                        :class="[
                                            active ? 'bg-gray-100' : '',
                                            'block px-4 py-2 text-sm text-gray-700',
                                        ]"
                                        @click="logout"
                                        >Iesi din cont</a
                                    >
                                </MenuItem>
                            </MenuItems>
                        </transition>
                    </Menu>
                </div>
            </div>
        </div>

        <DisclosurePanel class="lg:hidden">
            <div class="space-y-1 pt-2 pb-3">
                <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800" -->
                <router-link
                    :to="{ name: 'dashboard' }"
                    class="block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700"
                    >Panou de control</router-link
                >
                <router-link
                    :to="{ name: 'dashboard' }"
                    class="block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700"
                    >Clienti</router-link
                >
            </div>
            <div class="border-t border-gray-200 pt-4 pb-3">
                <div class="flex items-center px-4">
                    <div class="ml-3">
                        <div class="text-base font-medium text-gray-800">
                            {{ user.name }}
                        </div>
                        <div class="text-sm font-medium text-gray-500">
                            {{ user.email }}
                        </div>
                    </div>
                    <button
                        type="button"
                        class="ml-auto flex-shrink-0 rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        <span class="sr-only">View notifications</span>
                        <BellIcon class="h-6 w-6" aria-hidden="true" />
                    </button>
                </div>
                <div class="mt-3 space-y-1">
                    <router-link
                        :to="{ name: 'settings' }"
                        class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800"
                        >Setari cont</router-link
                    >
                    <a
                        href="#"
                        class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800"
                        @click="logout"
                        >Iesi din cont</a
                    >
                </div>
            </div>
        </DisclosurePanel>
    </Disclosure>

    <!-- <div class="max-w-7xl my-12 mx-auto">
        DEBUG USER:
        {{ auth }}
    </div> -->
</template>

<script setup>
import {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
} from "@headlessui/vue";
import { MagnifyingGlassIcon } from "@heroicons/vue/20/solid";
import { Bars3Icon, BellIcon, XMarkIcon } from "@heroicons/vue/24/outline";
</script>

<script>
import { mapActions } from "vuex";
export default {
    name: "dashboard",
    data() {
        return {
            user: this.$store.state.auth.user,
            auth: this.$store.state.auth,
        };
    },
    methods: {
        ...mapActions({
            signOut: "auth/logout",
        }),
        async logout() {
            await axios.post("/logout").then(({ data }) => {
                this.signOut();
                this.$router.push({ name: "login" });
            });
        },
        async get() {
            await axios.get("/api/clients").then(({ data }) => {
                console.log(data);
            });
        },
        async getById() {
            await axios.get("/api/clients/2").then(({ data }) => {
                console.log(data);
            });
        },
        async create() {
            await axios
                .post("/api/clients", {
                    name: "Finn",
                    email: "test@test.ro",
                })
                .then(({ data }) => {
                    console.log(data);
                });
        },
        async delete() {
            await axios.delete("/api/clients/2").then(({ data }) => {
                console.log(data);
            });
        },
    },
};
</script>
