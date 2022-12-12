<template>
    <div class="container">
        <form class="divide-y divide-gray-200 " action="#" method="POST">
            <!-- Profile section -->
            <div class="py-6 px-4 sm:p-6 lg:pb-8">
                <div>
                    <h2 class="text-lg font-medium leading-6 text-gray-900">My Profile</h2>
                    <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly so
                        be careful what you share.</p>
                </div>

                <div class="mt-6 flex flex-col lg:flex-row">
                    <div class="flex-grow space-y-6">

                        <div class="grid grid-cols-12 gap-6">

                            <div class="col-span-12 sm:col-span-4">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Username</label>
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                            </div>
                            <div class="col-span-12 sm:col-span-4">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                    name</label>
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                            </div>

                            <div class="col-span-12 sm:col-span-4">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Last
                                    name</label>
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                            </div>
                        </div>
                        <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                            <div class="mt-1">
                                <textarea id="about" name="about" rows="3"
                                    class="mt-1 block w-full rounded-app border border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm" />
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Brief description for your profile.
                                URLs are hyperlinked.</p>
                        </div>
                    </div>

                    <div class="mt-8 flex-grow lg:mt-6 lg:ml-6 lg:flex-shrink-0 lg:flex-grow-0">
                        <div class="mt-1 lg:hidden">
                            <div class="flex items-center">
                                <div class="inline-block h-12 w-12 flex-shrink-0 overflow-hidden rounded-full"
                                    aria-hidden="true">
                                    <img class="h-full w-full rounded-full" src="../../assets/user-pic.jpg" alt="" />
                                </div>
                                <div class="ml-5 rounded-app shadow-sm">
                                    <div
                                        class="group relative flex items-center justify-center rounded-app border border-gray-300 py-2 px-3 focus-within:ring-2 focus-within:ring-sky-500 focus-within:ring-offset-2 hover:bg-gray-50">
                                        <label for="mobile-user-photo"
                                            class="pointer-events-none relative text-sm font-medium leading-4 text-gray-700">
                                            <span>Change</span>
                                            <span class="sr-only"> user photo</span>
                                        </label>
                                        <input id="mobile-user-photo" name="user-photo" type="file"
                                            class=" h-full w-full cursor-pointer rounded-app border-gray-300 opacity-0" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative hidden overflow-hidden rounded-full lg:block">
                            <img class="relative h-40 w-40 rounded-full" src="../../assets/user-pic.jpg" alt="" />
                            <label for="desktop-user-photo"
                                class="absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-75 text-sm font-medium text-white opacity-0 focus-within:opacity-100 hover:opacity-100">
                                <span>Change</span>
                                <span class="sr-only"> user photo</span>
                                <input type="file" id="desktop-user-photo" name="user-photo"
                                    class="absolute inset-0 h-full w-full cursor-pointer rounded-app border-gray-300 opacity-0" />
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-12 gap-6">

                    <div class="col-span-12 sm:col-span-12 grid grid-cols-2 gap-6">
                        <div>
                            <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                            <input type="text" name="country" id="country" autocomplete="country"
                                class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                        </div>
                        <div>
                            <label for="City" class="block text-sm font-medium text-gray-700">City</label>
                            <input type="text" name="City" id="City" autocomplete="City"
                                class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                        </div>
                    </div>


                    <div class="col-span-12 sm:col-span-12">
                        <label for="url" class="block text-sm font-medium text-gray-700">Social media links</label>
                        <div class="grid grid-cols-2  gap-6">
                            <div class="flex flex-row items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-facebook cursor-pointer" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                                <input type="text" name="url" id="url"
                                    class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                            </div>
                            <div class="flex flex-row items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-instagram cursor-pointer" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                                <input type="text" name="url" id="url"
                                    class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                            </div>
                            <div class="flex flex-row items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-youtube cursor-pointer" viewBox="0 0 16 16">
                                    <path
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                </svg>
                                <input type="text" name="url" id="url"
                                    class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                            </div>
                            <div class="flex flex-row items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-twitter cursor-pointer" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg>
                                <input type="text" name="url" id="url"
                                    class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                            </div>

                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label for="url" class="block text-sm font-medium text-gray-700">Links to your songs</label>
                        <div class="flex flex-col gap-5">
                            <div class="flex flex-row gap-3 justify between w-full items-center"
                                v-for="(item, index) in songs.slice()" v-bind:key="index">
                                <input type="text"
                                    class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm sm:text-sm" />
                                <div class="mt-1 py-1.5 px-3.5 border border-gray-300 text-black rounded-app text-center font-bold cursor-pointer"
                                    @click="removeItem(songs, item)" v-if="index < songs.length - 1">
                                    <span>-</span>
                                </div>
                                <div class="mt-1 py-1.5 px-3 border border-gray-300 text-black rounded-app text-center font-bold cursor-pointer"
                                    @click="pushItem(songs, item)" v-if="index >= songs.length - 1">
                                    <span>+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label for="url" class="block text-sm font-medium text-gray-700">Top events you attended</label>
                        <div class="flex flex-col gap-5">
                            <div class="flex flex-col md:flex-row gap-5" v-for="(item, index) in events.slice()"
                                v-bind:key="index">
                                <div class="grid grid-cols-2 md:flex flex-row gap-6 w-full items-center">
                                    <input placeholder="Name of the event" type="text"
                                        class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm sm:text-sm" />
                                    <input placeholder="Date" type="date"
                                        class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm sm:text-sm" />
                                    <input placeholder="Location" type="text"
                                        class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm sm:text-sm" />
                                    <input placeholder="Short description" type="text"
                                        class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm sm:text-sm" />
                                </div>
                                <div class="mt-1 py-1.5 px-3.5 border border-gray-300 text-black rounded-app text-center font-bold cursor-pointer"
                                    @click="removeEvent(events, item)" v-if="index < events.length - 1">
                                    <span>-</span>
                                </div>
                                <div class="col-span-2 mt-2 py-1.5 px-3 border border-gray-300 text-black rounded-app text-center font-bold cursor-pointer"
                                    @click="pushEvent(events, item)" v-if="index >= events.length - 1">
                                    <span>+</span>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

            <!-- Privacy section -->
            <div class="divide-y divide-gray-200 pt-6">
                <div class="px-4 sm:px-6">
                    <div>
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Privacy</h2>
                        <p class="mt-1 text-sm text-gray-500">Ornare eu a volutpat eget vulputate.
                            Fringilla commodo amet.</p>
                    </div>
                    <ul role="list" class="mt-2 divide-y divide-gray-200">
                        <SwitchGroup as="li" class="flex items-center justify-between py-4">
                            <div class="flex flex-col">
                                <SwitchLabel as="p" class="text-sm font-medium text-gray-900" passive>
                                    Available to hire</SwitchLabel>
                                <SwitchDescription class="text-sm text-gray-500">Nulla amet tempus sit
                                    accumsan. Aliquet turpis sed sit lacinia.</SwitchDescription>
                            </div>
                            <Switch v-model="availableToHire"
                                :class="[availableToHire ? 'bg-black' : 'bg-gray-200', 'relative ml-4 inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2']">
                                <span aria-hidden="true"
                                    :class="[availableToHire ? 'translate-x-5' : 'translate-x-0', 'inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
                            </Switch>
                        </SwitchGroup>
                        <SwitchGroup as="li" class="flex items-center justify-between py-4">
                            <div class="flex flex-col">
                                <SwitchLabel as="p" class="text-sm font-medium text-gray-900" passive>
                                    Make account private</SwitchLabel>
                                <SwitchDescription class="text-sm text-gray-500">Pharetra morbi dui mi
                                    mattis tellus sollicitudin cursus pharetra.</SwitchDescription>
                            </div>
                            <Switch v-model="privateAccount"
                                :class="[privateAccount ? 'bg-black' : 'bg-gray-200', 'relative ml-4 inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2']">
                                <span aria-hidden="true"
                                    :class="[privateAccount ? 'translate-x-5' : 'translate-x-0', 'inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
                            </Switch>
                        </SwitchGroup>
                        <SwitchGroup as="li" class="flex items-center justify-between py-4">
                            <div class="flex flex-col">
                                <SwitchLabel as="p" class="text-sm font-medium text-gray-900" passive>
                                    Allow commenting</SwitchLabel>
                                <SwitchDescription class="text-sm text-gray-500">Integer amet, nunc
                                    hendrerit adipiscing nam. Elementum ame</SwitchDescription>
                            </div>
                            <Switch v-model="allowCommenting"
                                :class="[allowCommenting ? 'bg-black' : 'bg-gray-200', 'relative ml-4 inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2']">
                                <span aria-hidden="true"
                                    :class="[allowCommenting ? 'translate-x-5' : 'translate-x-0', 'inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
                            </Switch>
                        </SwitchGroup>
                        <SwitchGroup as="li" class="flex items-center justify-between py-4">
                            <div class="flex flex-col">
                                <SwitchLabel as="p" class="text-sm font-medium text-gray-900" passive>
                                    Allow mentions</SwitchLabel>
                                <SwitchDescription class="text-sm text-gray-500">Adipiscing est
                                    venenatis enim molestie commodo eu gravid</SwitchDescription>
                            </div>
                            <Switch v-model="allowMentions"
                                :class="[allowMentions ? 'bg-black' : 'bg-gray-200', 'relative ml-4 inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2']">
                                <span aria-hidden="true"
                                    :class="[allowMentions ? 'translate-x-5' : 'translate-x-0', 'inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
                            </Switch>
                        </SwitchGroup>
                    </ul>
                </div>
                <div class="mt-4 flex justify-end py-4 px-4 sm:px-6">
                    <button type="button"
                        class="inline-flex justify-center rounded-app border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-black shadow-sm hover:bg-black hover:text-white focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2">Cancel</button>
                    <button type="submit"
                        class="ml-5 inline-flex justify-center rounded-app border border-transparent bg-black py-2 px-4 text-sm font-medium text-white shadow-sm outline-none ">Save</button>
                </div>
            </div>
        </form>

    </div>
</template>

<script setup>
import { ref } from 'vue'
import {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    Switch,
    SwitchDescription,
    SwitchGroup,
    SwitchLabel,
} from '@headlessui/vue'
import { MagnifyingGlassIcon } from '@heroicons/vue/20/solid'
import {
    Bars3Icon,
    BellIcon,
    CogIcon,
    CreditCardIcon,
    KeyIcon,
    SquaresPlusIcon,
    UserCircleIcon,
    XMarkIcon,
} from '@heroicons/vue/24/outline'

const user = {
    name: 'Debbie Lewis',
    handle: 'deblewis',
    email: 'debbielewis@example.com',
    imageUrl:
        'https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=320&h=320&q=80',
}
const navigation = [
    { name: 'Dashboard', href: '#', current: true },
    { name: 'Jobs', href: '#', current: false },
    { name: 'Applicants', href: '#', current: false },
    { name: 'Company', href: '#', current: false },
]
const subNavigation = [
    { name: 'Profile', href: '#', icon: UserCircleIcon, current: true },
    { name: 'Account', href: '#', icon: CogIcon, current: false },
    { name: 'Password', href: '#', icon: KeyIcon, current: false },
    { name: 'Notifications', href: '#', icon: BellIcon, current: false },
    { name: 'Billing', href: '#', icon: CreditCardIcon, current: false },
    { name: 'Integrations', href: '#', icon: SquaresPlusIcon, current: false },
]
const userNavigation = [
    { name: 'Your Profile', href: '#' },
    { name: 'Settings', href: '#' },
    { name: 'Sign out', href: '#' },
]

const availableToHire = ref(true)
const privateAccount = ref(false)
const allowCommenting = ref(true)
const allowMentions = ref(true)
const songs = ref([
    { link: "" },

]);
const events = ref([
    { name: "", date: "", location: "", description: "" },

]);

function pushItem(arr) {
    arr.push({ link: '' });
};
function removeItem(arr, value) {
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] === value) {
            arr.splice(i, 1);
        }
    }
};

function pushEvent(arr) {
    arr.push({ link: '' });
};

function removeEvent(arr, value) {
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] === value) {
            arr.splice(i, 1);
        }
    }
};

</script>
