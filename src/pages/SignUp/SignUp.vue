<template>
    <!--
      This example requires updating your template:
  
      ```
      <html class="h-full bg-white">
      <body class="h-full">
      ```
    -->
    <div class="pt-10 sm:pt-0 sm:h-screen">
        <div class="flex min-h-full ">
            <div class="flex flex-1 flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
                <div class="mx-auto w-full max-w-sm lg:w-96">
                    <div>
                        <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">Sign up to your account</h2>
                    </div>

                    <div class="mt-8">
                        <div>
                            <div>
                                <p class="text-sm font-medium text-gray-700">Sign up with</p>

                                <div class="mt-1 grid grid-cols-3 gap-3">
                                    <div>
                                        <router-link to="#"
                                            class="inline-flex w-full justify-center rounded-app border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-500 shadow-sm hover:bg-gray-50">
                                            <span class="sr-only">Sign up with Facebook</span>
                                            <svg class="h-5 w-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </router-link>
                                    </div>

                                    <div>
                                        <router-link to="#"
                                            class="inline-flex w-full justify-center rounded-app border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-500 shadow-sm hover:bg-gray-50">
                                            <span class="sr-only">Sign up with Google</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                            </svg>
                                        </router-link>
                                    </div>

                                    <div>
                                        <router-link to="#"
                                            class="inline-flex w-full justify-center rounded-app border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-500 shadow-sm hover:bg-gray-50">
                                            <span class="sr-only">Sign up with Twitter</span>
                                            <svg class="h-5 w-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                            </svg>
                                        </router-link>
                                    </div>


                                </div>
                            </div>

                            <div class="relative mt-6">
                                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                    <div class="w-full border-t border-gray-300" />
                                </div>
                                <div class="relative flex justify-center text-sm">
                                    <span class="bg-white px-2 text-gray-500">Or continue with</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <form @submit.prevent="handleSignUpSubmit" class="space-y-6">
                                <div class="flex gap-5">
                                    <div>
                                        <label for="firstName" class="block text-sm font-medium text-gray-700">First
                                            Name</label>
                                        <div class="mt-1">
                                            <input id="firstName" name="firstName" type="text" autocomplete="firstName"
                                                required=""
                                                class="block w-full appearance-none rounded-app border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" />
                                        </div>
                                    </div>
                                    <div>
                                        <label for="lastName" class="block text-sm font-medium text-gray-700">Last
                                            Name</label>
                                        <div class="mt-1">
                                            <input id="lastName" name="lastName" type="text" autocomplete="lastName"
                                                required=""
                                                class="block w-full appearance-none rounded-app border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" />
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email
                                        address</label>
                                    <div class="mt-1">
                                        <input id="email" name="email" type="email" autocomplete="email" required=""
                                            class="block w-full appearance-none rounded-app border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" />
                                    </div>
                                </div>

                                <div class="space-y-1">
                                    <label for="password"
                                        class="block text-sm font-medium text-gray-700">Password</label>
                                    <div class="mt-1">
                                        <input id="password" name="password" type="password"
                                            autocomplete="current-password" required=""
                                            class="block w-full appearance-none rounded-app border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" />
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <input id="remember-me" name="remember-me" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember
                                            me</label>
                                    </div>

                                    <div class="text-sm">
                                        <router-link to="#"
                                            class="font-medium text-indigo-600 hover:text-indigo-500">Forgot
                                            your
                                            password?</router-link>
                                    </div>
                                </div>


                                <button type="submit"
                                    class="flex w-full justify-center rounded-app border border-transparent bg-black py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign
                                    up</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative hidden w-0 flex-1 lg:block">
                <img class="absolute inset-0 h-full w-full object-cover" src="../../assets/sign-in-image.jpg" alt="" />
            </div>
        </div>
    </div>
</template>
<script setup>
import { useUserStore } from '../../../stores/userStore'
import { useRouter } from 'vue-router'

const userStore = useUserStore()
const router = useRouter()

function handleSignUpSubmit() {
    userStore.register()
    router.replace('/sign-in')

}
</script>
