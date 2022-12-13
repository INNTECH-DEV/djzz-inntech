<template>
    <div class="container">
        <div class="flex flex-col gap-10">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
                <div class="flex justify-end">
                    <img class="w-full h-auto" :src="userStore.profileData.profile_pic" />
                </div>
                <div class="flex flex-col gap-1 ">
                    <div class="flex items-center gap-5">
                        <h1 class=" text-4xl font-bold text-secondary">{{ userStore.profileData.name }}</h1>
                        <svg v-if="userStore.profileData.badge" xmlns="http://www.w3.org/2000/svg" width="25"
                            height="25" fill="currentColor" class="bi bi-patch-check-fill mt-2" viewBox="0 0 16 16">
                            <path
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                        </svg>
                    </div>

                    <div class="flex flex-col gap-4 mt-5">
                        <p class="text-black"><span class="font-bold">Ranking: </span> {{ userStore.profileData.ranking
                        }}</p>
                        <p class="text-black"><span class="font-bold">Genres: </span><span
                                v-for="(genre, index) in userStore.profileData.genres" v-bind:key="index">{{ genre
                                }}<span v-if="index < userStore.profileData.genres.length - 1">, </span> </span> </p>
                        <p><span class="font-bold">From: </span> {{ userStore.profileData.adress }}</p>
                        <p><span class="font-bold">Age: </span> {{ userStore.profileData.age }}</p>
                        <!-- <div class="flex flex-col items-start mt-5">
                            <p class="font-bold text-lg pb-2">Events attended:</p>
                            <ul class="list-disc;">
                                <li class="" v-for="(event, index) in userStore.profileData.attended_events"
                                    v-bind:key="index">
                                    <span class="font-bold">{{ event.name }}</span> - {{ event.date }} - {{
                                            event.description
                                    }}
                                </li>
                            </ul>
                        </div> -->

                        <div class="flex justify-start gap-5 items-center ">

                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-facebook cursor-pointer" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-instagram cursor-pointer" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-youtube cursor-pointer" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-twitter cursor-pointer" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </div>
                        <!-- <div class="">
                            <p class="mb-2 font-bold">Events attended:</p>
                            <Carousel :settings="settings" :breakpoints="breakpoints" class="-mx-2 ">
                                <Slide v-for="(event, index) in userStore.profileData.attended_events"
                                    v-bind:key="index">
                                    <div class="carousel__item mx-2 w-full h-full shadow-md border p-4 rounded-lg">
                                        <div class="flex flex-col ">
                                            <p class="font-bold">{{ event.name }}</p>
                                            <p class="text-xs">{{ event.date }}</p>
                                            <p class="text-sm">{{ event.location }}</p>
                                            <p class="text-xs">"{{ event.description }}"</p>
                                        </div>
                                    </div>
                                </Slide>

                                <template #addons>
                                    <Navigation />
                                </template>
                            </Carousel>
                        </div> -->
                    </div>
                </div>

            </div>
            <div class="grid grid-cols-2 gap-10">
                <div class="flex flex-col text-base">
                    <p class="mb-2 font-bold">About me:</p>
                    <p>{{ userStore.profileData.description }}</p>
                </div>

                <div class="">
                    <p class="mb-2 font-bold">Events attended:</p>
                    <Carousel :settings="settings" :breakpoints="breakpoints" class="-mx-2 ">
                        <Slide v-for="(event, index) in userStore.profileData.attended_events" v-bind:key="index">
                            <div class="carousel__item mx-2 w-full h-full shadow-md border p-4 rounded-lg">
                                <div class="flex flex-col ">
                                    <p class="font-bold">{{ event.name }}</p>
                                    <p class="text-xs">{{ event.date }}</p>
                                    <p class="text-sm">{{ event.location }}</p>
                                    <p class="text-xs">"{{ event.description }}"</p>
                                </div>
                            </div>
                        </Slide>

                        <template #addons>
                            <Navigation />
                        </template>
                    </Carousel>
                </div>

            </div>
            <p class=" text-2xl font-bold text-center mt-5">Top songs</p>


            <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-5">
                <div v-for="(song, index) in userStore.profileData.songs" v-bind:key="index">
                    <a :href="song" target="_blank" class="w-full">
                        <div class="flex w-full ">
                            <div class="rounded-lg shadow-lg bg-white ">

                                <img class="rounded-t-lg w-full"
                                    src="https://i.ytimg.com/vi/BzOOF_BDtho/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLA1CBYPMlPV9UxwRS5s_J-pewaYHg"
                                    alt="" />

                                <div class="p-6 w-full">
                                    <h5 class="text-black text-xl font-medium mb-2">Song title</h5>
                                    <p class="text-black text-base mb-4">
                                        Official Video for “Obsessed” by Calvin Harris, Charlie Puth and Shenseea
                                    </p>
                                    <p class="text-xs">Source: Spotify</p>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="">

                <div
                    class="flex flex-col md:grid md:grid-cols-7 gap-12 sm:gap-24 rounded-t-3xl rounded-app shadow-lg mb-12 py-16 pl-5 pr-5 md:pl-24 md:pr-16 bg-no-repeat bg-white">
                    <div class="col-span-4">
                        <h2 class="text-3xl sm:text-4xl	text-textPrimay font-bold font-primary mb-6">Contact</h2>
                        <p class="font-primary text-accent text-sm sm:text-base">For more details contact me below. We
                            are here to help you with any problem you encounter.</p>
                        <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-5 gap-y-6 mt-5 sm:mt-9">
                            <router-link to="https://wa.me/+40726720823" class="flex gap-2 sm:gap-4 items-center">
                                <div>
                                    <svg class="stroke-black" width="32" height="33" viewBox="0 0 32 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_317_396)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M23.22 19.6761C22.8227 19.4774 20.8747 18.5201 20.512 18.3867C20.1493 18.2547 19.8853 18.1894 19.62 18.5867C19.356 18.9814 18.5973 19.8747 18.3667 20.1387C18.1347 20.4041 17.904 20.4361 17.508 20.2387C17.112 20.0387 15.8347 19.6214 14.3213 18.2721C13.144 17.2214 12.348 15.9241 12.1173 15.5267C11.8867 15.1307 12.092 14.9161 12.2907 14.7187C12.4693 14.5414 12.6867 14.2561 12.8853 14.0254C13.084 13.7934 13.1493 13.6281 13.2813 13.3627C13.4147 13.0987 13.348 12.8681 13.248 12.6694C13.1493 12.4707 12.3573 10.5201 12.0267 9.72672C11.7053 8.95472 11.3787 9.06005 11.136 9.04672C10.904 9.03605 10.64 9.03339 10.376 9.03339C10.112 9.03339 9.68267 9.13205 9.32 9.52939C8.956 9.92539 7.93333 10.8841 7.93333 12.8347C7.93333 14.7841 9.352 16.6681 9.55067 16.9334C9.74933 17.1974 12.344 21.2001 16.3187 22.9161C17.2653 23.3241 18.0027 23.5681 18.5773 23.7494C19.5267 24.0521 20.3907 24.0094 21.0733 23.9067C21.8333 23.7934 23.4173 22.9481 23.748 22.0227C24.0773 21.0974 24.0773 20.3041 23.9787 20.1387C23.88 19.9734 23.616 19.8747 23.2187 19.6761H23.22ZM15.9907 29.5467H15.9853C13.6246 29.5472 11.3072 28.9125 9.276 27.7094L8.796 27.4241L3.80667 28.7334L5.13867 23.8694L4.82533 23.3707C3.50552 21.2699 2.80706 18.8384 2.81067 16.3574C2.81333 9.09072 8.72533 3.17872 15.996 3.17872C19.516 3.17872 22.8253 4.55205 25.3133 7.04272C26.5405 8.26483 27.5132 9.71814 28.175 11.3186C28.8369 12.919 29.1749 14.6348 29.1693 16.3667C29.1667 23.6334 23.2547 29.5467 15.9907 29.5467ZM27.2067 5.15072C25.7376 3.67195 23.9896 2.49944 22.0641 1.70112C20.1386 0.902806 18.0738 0.494565 15.9893 0.500055C7.25067 0.500055 0.136 7.61339 0.133333 16.3561C0.129284 19.1384 0.859166 21.8726 2.24933 24.2827L0 32.5001L8.40533 30.2947C10.7305 31.5616 13.3361 32.2253 15.984 32.2254H15.9907C24.7293 32.2254 31.844 25.1121 31.8467 16.3681C31.8531 14.2844 31.4463 12.2202 30.6499 10.2948C29.8535 8.36934 28.6831 6.62095 27.2067 5.15072Z"
                                                fill="#050038"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_317_396">
                                                <rect width="32" height="32" fill="white" transform="translate(0 0.5)">
                                                </rect>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                                <div class="flex flex-col text-xs sm:text-sm text-black">
                                    <p class="font-bold">WhatsApp</p>
                                    <p class="underline">+40 74* *** ***</p>
                                </div>
                            </router-link>
                            <router-link to="mailto:office@dj.ro" class="flex gap-2 sm:gap-4 items-center">
                                <div>
                                    <svg class="stroke-black" width="32" height="33" viewBox="0 0 32 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M28 6.5H4C3.46957 6.5 2.96086 6.71071 2.58579 7.08579C2.21071 7.46086 2 7.96957 2 8.5V24.5C2 25.0304 2.21071 25.5391 2.58579 25.9142C2.96086 26.2893 3.46957 26.5 4 26.5H28C28.5304 26.5 29.0391 26.2893 29.4142 25.9142C29.7893 25.5391 30 25.0304 30 24.5V8.5C30 7.96957 29.7893 7.46086 29.4142 7.08579C29.0391 6.71071 28.5304 6.5 28 6.5ZM25.8 8.5L16 15.28L6.2 8.5H25.8ZM4 24.5V9.41L15.43 17.32C15.5974 17.4361 15.7963 17.4984 16 17.4984C16.2037 17.4984 16.4026 17.4361 16.57 17.32L28 9.41V24.5H4Z"
                                            fill="#050038"></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col text-xs sm:text-sm text-black">
                                    <p class="font-bold">Email</p>
                                    <p class="underline">office@dj.ro</p>
                                </div>
                            </router-link>
                            <router-link to="tel:+40726720823" class="flex gap-2 sm:gap-4 items-center">
                                <div>
                                    <svg class="stroke-black" width="32" height="33" viewBox="0 0 32 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.4094 7.95937L24.0812 4.63438C23.675 4.22813 23.1313 4 22.5562 4C21.9812 4 21.4375 4.225 21.0312 4.63438L17.4469 8.2125C17.0406 8.61875 16.8125 9.16563 16.8125 9.74063C16.8125 10.3188 17.0375 10.8594 17.4469 11.2688L20.2469 14.0719C19.609 15.5581 18.6925 16.9084 17.5469 18.05C16.4 19.2031 15.0594 20.1125 13.5719 20.7563L10.7719 17.9531C10.3656 17.5469 9.82187 17.3188 9.24687 17.3188C8.96326 17.3177 8.68229 17.3733 8.42042 17.4822C8.15856 17.5911 7.92107 17.7512 7.72188 17.9531L4.13438 21.5312C3.72813 21.9375 3.5 22.4844 3.5 23.0594C3.5 23.6375 3.725 24.1781 4.13438 24.5875L7.45937 27.9125C8.15312 28.6063 9.10938 29.0031 10.0906 29.0031C10.2937 29.0031 10.4906 28.9875 10.6906 28.9531C14.8281 28.2719 18.9344 26.0688 22.25 22.7563C25.5625 19.4375 27.7625 15.3313 28.45 11.1906C28.6469 10.0156 28.2531 8.80625 27.4094 7.95937ZM26.2344 10.8188C25.625 14.5031 23.6437 18.1781 20.6594 21.1625C17.675 24.1469 14.0031 26.1281 10.3188 26.7375C9.85625 26.8156 9.38125 26.6594 9.04375 26.325L5.77812 23.0594L9.24063 19.5938L12.9844 23.3438L13.0125 23.3719L13.6875 23.1219C15.7341 22.3694 17.5927 21.1809 19.1343 19.6387C20.676 18.0965 21.8639 16.2375 22.6156 14.1906L22.8656 13.5156L19.0906 9.74375L22.5531 6.27812L25.8188 9.54375C26.1562 9.88125 26.3125 10.3563 26.2344 10.8188Z"
                                            fill="#050038"></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col text-xs sm:text-sm text-black">
                                    <p class="font-bold">Phone</p>
                                    <p class="">+40 7** *** ***</p>
                                </div>
                            </router-link>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div role="form" class="" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form class="flex flex-col gap-3">
                                <div>
                                    <label>Full Name</label>
                                    <input placeholder="Full Name" type="text"
                                        class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm sm:text-sm" />
                                </div>
                                <div>
                                    <label>Company</label>
                                    <input placeholder="Company" type="text"
                                        class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm sm:text-sm" />
                                </div>
                                <div>
                                    <label>Phone Number</label>
                                    <input placeholder="+40 7** *** ***" type="number"
                                        class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm sm:text-sm" />
                                </div>
                                <div>
                                    <label>Email</label>
                                    <input placeholder="user@company.com" type="text"
                                        class="mt-1 block w-full rounded-app border border-gray-300 py-2 px-3 shadow-sm sm:text-sm" />
                                </div>
                                <button
                                    class=" items-center justify-center rounded-app bg-black py-2 text-base font-medium text-white shadow-sm">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</template>

<script setup>
import { ref } from 'vue';
import { useUserStore } from '../../../stores/userStore';
import { Carousel, Navigation, Slide } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';


const userStore = useUserStore()

const settings = ref({
    itemsToShow: 1,
    snapAlign: 'center',
});

// breakpoints are mobile first
// any settings not specified will fallback to the carousel settings
const breakpoints = ref({
    // 700px and up
    700: {
        itemsToShow: 1,
        snapAlign: 'start',
    },
    // 1024 and up
    1024: {
        itemsToShow: 2,
        snapAlign: 'start',
    },
    1280: {
        itemsToShow: 3,
        snapAlign: 'start',
    },
});

</script>