<template>
    <Popover class="relative w-full bg-white ">
        <div class="mx-auto container ">
            <div
                class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1 ">
                    <router-link to="/">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto sm:h-16 " src="../../assets/DJZZ.png" alt="" />
                    </router-link>
                </div>
                <div class="-my-2 -mr-2 md:hidden">
                    <PopoverButton
                        class="inline-flex items-center justify-center rounded-app bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Open menu</span>
                        <Bars3Icon class="h-6 w-6" aria-hidden="true" />
                    </PopoverButton>
                </div>
                <PopoverGroup as="nav" class="hidden space-x-10 md:flex">
                    <!-- <Popover class="relative" v-slot="{ open }">
                        <PopoverButton
                            :class="[open ? 'text-gray-900' : 'text-gray-500', 'group inline-flex items-center rounded-app bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']">
                            <span>Solutions</span>
                            <ChevronDownIcon
                                :class="[open ? 'text-gray-600' : 'text-gray-400', 'ml-2 h-5 w-5 group-hover:text-gray-500']"
                                aria-hidden="true" />
                        </PopoverButton>

                        <transition enter-active-class="transition ease-out duration-200"
                            enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0"
                            leave-active-class="transition ease-in duration-150"
                            leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
                            <PopoverPanel
                                class="absolute z-10 -ml-4 mt-3 w-screen max-w-md transform px-2 sm:px-0 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2">
                                <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                        <a v-for="item in solutions" :key="item.name" :href="item.href"
                                            class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                            <component :is="item.icon" class="h-6 w-6 flex-shrink-0 text-indigo-600"
                                                aria-hidden="true" />
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">{{ item.name }}</p>
                                                <p class="mt-1 text-sm text-gray-500">{{ item.description }}</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="space-y-6 bg-gray-50 px-5 py-5 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                        <div v-for="item in callsToAction" :key="item.name" class="flow-root">
                                            <a :href="item.href"
                                                class="-m-3 flex items-center rounded-app p-3 text-base font-medium text-gray-900 hover:bg-gray-100">
                                                <component :is="item.icon" class="h-6 w-6 flex-shrink-0 text-gray-400"
                                                    aria-hidden="true" />
                                                <span class="ml-3">{{ item.name }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </PopoverPanel>
                        </transition>
                    </Popover> -->

                    <router-link to="/feed"
                        class="text-base font-medium text-gray-500 hover:text-gray-900">Feed</router-link>
                    <router-link to="/all-djs" class="text-base font-medium text-gray-500 hover:text-gray-900">All
                        DJs</router-link>
                    <router-link to="/dj-profile" class="text-base font-medium text-gray-500 hover:text-gray-900">DJ
                        profile</router-link>

                    <!-- <Popover class="relative" v-slot="{ open }">
                        <PopoverButton
                            :class="[open ? 'text-gray-900' : 'text-gray-500', 'group inline-flex items-center rounded-app bg-white text-base font-medium hover:text-gray-900 ']">
                            <span>More</span>
                            <ChevronDownIcon
                                :class="[open ? 'text-gray-600' : 'text-gray-400', 'ml-2 h-5 w-5 group-hover:text-gray-500']"
                                aria-hidden="true" />
                        </PopoverButton>

                        <transition enter-active-class="transition ease-out duration-200"
                            enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0"
                            leave-active-class="transition ease-in duration-150"
                            leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
                            <PopoverPanel
                                class="absolute left-1/2 z-10 mt-3 w-screen max-w-md -translate-x-1/2 transform px-2 sm:px-0">
                                <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                        <a v-for="item in resources" :key="item.name" :href="item.href"
                                            class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                            <component :is="item.icon" class="h-6 w-6 flex-shrink-0 text-indigo-600"
                                                aria-hidden="true" />
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">{{ item.name }}</p>
                                                <p class="mt-1 text-sm text-gray-500">{{ item.description }}</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="bg-gray-50 px-5 py-5 sm:px-8 sm:py-8">
                                        <div>
                                            <h3 class="text-base font-medium text-gray-500">Recent Posts</h3>
                                            <ul role="list" class="mt-4 space-y-4">
                                                <li v-for="post in recentPosts" :key="post.id"
                                                    class="truncate text-base">
                                                    <a :href="post.href"
                                                        class="font-medium text-gray-900 hover:text-gray-700">{{
                                                                post.name
                                                        }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mt-5 text-sm">
                                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                View all posts
                                                <span aria-hidden="true"> &rarr;</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </PopoverPanel>
                        </transition>
                    </Popover> -->
                </PopoverGroup>
                <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0 ">
                    <Popover class="relative flex items-center " v-slot="{ open }">
                        <PopoverButton
                            :class="[open ? 'text-gray-900' : 'text-gray-500', 'group inline-flex items-center rounded-app bg-white text-base font-medium hover:text-gray-900 outline-0']">

                            <div>
                                <img class="relative h-10 w-10 rounded-full" src="../../assets/user-pic.jpg" alt="" />
                            </div>
                            <ChevronDownIcon
                                :class="[open ? 'text-gray-600' : 'text-gray-400', 'ml-2 h-5 w-5 group-hover:text-gray-500']"
                                aria-hidden="true" />
                        </PopoverButton>

                        <transition enter-active-class="transition ease-out duration-200"
                            enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0"
                            leave-active-class="transition ease-in duration-150"
                            leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
                            <PopoverPanel
                                class="absolute left-1/2 z-10 mt-3 top-10 w-screen max-w-xs -translate-x-1/2 transform px-2 sm:px-0">
                                <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                        <a v-for="item in userSettings" :key="item.name" :href="item.href"
                                            class="-m-3 block rounded-app p-3 transition duration-150 ease-in-out hover:bg-gray-50">
                                            <p class="text-base font-medium text-gray-900">{{ item.name }}</p>
                                            <p class="mt-1 text-sm text-gray-500">{{ item.description }}</p>
                                        </a>
                                    </div>
                                </div>
                            </PopoverPanel>
                        </transition>
                    </Popover>
                    <div @click="userStore.logout()"
                        class="ml-8 cursor-pointer inline-flex items-center justify-center whitespace-nowrap rounded-app border border-transparent bg-black px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">
                        Log Out</div>
                </div>
            </div>
        </div>

        <transition enter-active-class="duration-200 ease-out" enter-from-class="opacity-0 scale-95"
            enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
            leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
            <PopoverPanel focus class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden">
                <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                    <div class="px-5 pt-5 pb-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto" src="../../assets/DJZZ.png" alt="Your Company" />
                            </div>
                            <div class="-mr-2">
                                <PopoverButton
                                    class="inline-flex items-center justify-center rounded-app bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                                </PopoverButton>
                            </div>
                        </div>
                        <div class="mt-6">
                            <nav class="grid gap-y-8">
                                <router-link to="/feed"
                                    class="text-base font-medium text-gray-500 hover:text-gray-900">Feed</router-link>
                                <router-link to="/all-djs"
                                    class="text-base font-medium text-gray-500 hover:text-gray-900">All
                                    DJs</router-link>
                                <router-link to="/dj-profile"
                                    class="text-base font-medium text-gray-500 hover:text-gray-900">DJ
                                    profile</router-link>
                            </nav>
                        </div>
                    </div>
                    <div class="space-y-6 py-6 px-5">
                        <div>
                            <div @click="userStore.logout"
                                class="flex w-full items-center justify-center rounded-app border border-transparent bg-black px-4 py-2 text-base font-medium text-white shadow-sm ">
                                Log Out</div>
                        </div>
                    </div>
                </div>
            </PopoverPanel>
        </transition>
    </Popover>
</template>
  
<script setup>
import { Popover, PopoverButton, PopoverGroup, PopoverPanel } from '@headlessui/vue'
import {
    ArrowPathIcon,
    Bars3Icon,
    BookmarkSquareIcon,
    CalendarIcon,
    ChartBarIcon,
    CursorArrowRaysIcon,
    LifebuoyIcon,
    PhoneIcon,
    PlayIcon,
    ShieldCheckIcon,
    Squares2X2Icon,
    XMarkIcon,
} from '@heroicons/vue/24/outline'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'
import { useUserStore } from '../../../stores/userStore';

const userStore = useUserStore()
const userSettings = [
    { name: 'My Profile', description: 'Here you can make changes to your profile.', href: '/my-profile' },
    {
        name: 'Help Center',
        description: 'Get all of your questions answered in our forums of contact support.',
        href: '#',
    },
    { name: 'Guides', description: 'Learn how to maximize our platform to get the most out of it.', href: '#' },
    { name: 'Events', description: 'Check out webinars with experts and learn about our annual conference.', href: '#' },
    { name: 'Security', description: 'Understand how we take your privacy seriously.', href: '#' },
]
const solutions = [
    {
        name: 'Analytics',
        description: 'Get a better understanding of where your traffic is coming from.',
        href: '#',
        icon: ChartBarIcon,
    },
    {
        name: 'Engagement',
        description: 'Speak directly to your customers in a more meaningful way.',
        href: '#',
        icon: CursorArrowRaysIcon,
    },
    { name: 'Security', description: "Your customers' data will be safe and secure.", href: '#', icon: ShieldCheckIcon },
    {
        name: 'Integrations',
        description: "Connect with third-party tools that you're already using.",
        href: '#',
        icon: Squares2X2Icon,
    },
    {
        name: 'Automations',
        description: 'Build strategic funnels that will drive your customers to convert',
        href: '#',
        icon: ArrowPathIcon,
    },
]
const callsToAction = [
    { name: 'Watch Demo', href: '#', icon: PlayIcon },
    { name: 'Contact Sales', href: '#', icon: PhoneIcon },
]
const resources = [
    {
        name: 'Help Center',
        description: 'Get all of your questions answered in our forums or contact support.',
        href: '#',
        icon: LifebuoyIcon,
    },
    {
        name: 'Guides',
        description: 'Learn how to maximize our platform to get the most out of it.',
        href: '#',
        icon: BookmarkSquareIcon,
    },
    {
        name: 'Events',
        description: 'See what meet-ups and other events we might be planning near you.',
        href: '#',
        icon: CalendarIcon,
    },
    { name: 'Security', description: 'Understand how we take your privacy seriously.', href: '#', icon: ShieldCheckIcon },
]
const recentPosts = [
    { id: 1, name: 'Boost your conversion rate', href: '#' },
    { id: 2, name: 'How to use search engine optimization to drive traffic to your site', href: '#' },
    { id: 3, name: 'Improve your customer experience', href: '#' },
]
</script>