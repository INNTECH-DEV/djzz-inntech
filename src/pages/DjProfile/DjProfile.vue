<template>
    <div class="container">
        <div class="flex flex-col gap-10">
            <div class="grid grid-cols-2 items-center gap-10">
                <div class="flex justify-end">
                    <img class="w-[500px] h-auto" :src="userStore.profileData.profile_pic" />
                </div>
                <div class="flex flex-col gap-1 ">
                    <div class="flex items-center gap-5">
                        <h1 class=" text-4xl font-bold text-secondary">{{ userStore.profileData.name }}</h1>
                        <svg v-if="userStore.profileData.badge" xmlns="http://www.w3.org/2000/svg" width="25"
                            height="25" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                            <path
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                        </svg>
                    </div>
                    <p class="text-gray-600">Ranking : {{ userStore.profileData.ranking }}</p>
                    <div class="flex flex-col mt-5">
                        <p>From : {{ userStore.profileData.adress }}</p>
                        <div class="flex flex-col items-start mt-5">
                            <p>Events attended:</p>
                            <ul class="list-disc;">
                                <li class="flex" v-for="(event, index) in userStore.profileData.attended_events"
                                    v-bind:key="index">
                                    <b>{{ event.name }}</b> - {{ event.date }} - {{ event.description }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <p class="text-2xl font-bold text-center mt-5">Top songs:</p>


            <div class="grid grid-cols-3 gap-3">
                <div v-for="(song, index) in userStore.profileData.songs" v-bind:key="index">
                    <router-link :to="song">
                        <div class="flex justify-center">
                            <div class="rounded-lg shadow-lg bg-white max-w-sm">

                                <img class="rounded-t-lg w-full"
                                    src="https://i.ytimg.com/vi/BzOOF_BDtho/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLA1CBYPMlPV9UxwRS5s_J-pewaYHg"
                                    alt="" />

                                <div class="p-6">
                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Song title</h5>
                                    <p class="text-gray-700 text-base mb-4">
                                        Official Video for “Obsessed” by Calvin Harris, Charlie Puth and Shenseea
                                    </p>

                                </div>
                            </div>
                        </div>
                    </router-link>
                </div>
            </div>


        </div>
    </div>

</template>

<script setup>
import { useUserStore } from '../../../stores/userStore';

const userStore = useUserStore()


</script>