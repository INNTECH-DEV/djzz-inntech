<template>
    <div class="container flex items-center justify-center">
        <div class="flex flex-col gap-5 sm:gap-12 w-full h-full justify-center items-center">
            <div v-for="(post, index) in posts" v-bind:key="index"
                class="flex flex-col gap-5 w-full sm:w-[700px] border px-2 sm:px-10 py-5 shadow-lg rounded-app">
                <div class="flex gap-2 items-center justify-start">
                    <img class="h-8 rounded-full w-auto sm:h-12" src="../../assets/user-pic.jpg" />
                    <div class="flex flex-col">
                        <p class="font-bold">{{ post.user }}</p>
                        <p class=" text-xs text-gray-400">18 minutes ago</p>
                    </div>
                </div>
                <div>
                    {{ post.description }}
                </div>
                <div>
                    <img class="h-auto w-full" src="../../assets/sign-in-image.jpg" />
                </div>
                <div class="grid grid-cols-2 gap-10 w-full text-center text-xs sm:text-base">
                    <div
                        class="text-primary bg-secondary rounded-app border px-2 py-3 flex items-center justify-center cursor-pointer">
                        <div class="relative flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                            </svg>
                            <span class=" text-white rounded-full  text-xs">2 likes</span>
                        </div>
                    </div>
                    <!-- <div class="text-primary bg-secondary rounded-app border p-2">Comment</div> -->
                    <div
                        class="text-primary bg-secondary rounded-app border px-2 py-3 flex items-center justify-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-share-fill" viewBox="0 0 16 16">
                            <path
                                d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z" />
                        </svg>
                    </div>
                </div>
                <!-- <div class="relative ">
                    <div class="  w-full border-t p-3 flex flex-col gap-2 sm:gap-6"
                        :class="post.comments.length > 3 ? 'h-72 overflow-y-scroll ' : 'h-max justify-center'">
                        <div v-for="(comment, index) in post.comments" v-bind:key="index">
                            <div class="flex gap-2 items-start">
                                <img src="../../assets/user-pic.jpg" class="h-8 rounded-full w-auto sm:h-8" />
                                <div>
                                    <div class="bg-gray-100 rounded-app w-full px-3 py-1 flex flex-col">
                                        <p class="text-xs font-bold">{{ comment.name }}</p>
                                        <p class="text-base">{{ comment.comment }}</p>
                                    </div>
                                    <div class="text-xs text-gray-400">{{ comment.postedOn }}</div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class=" bg-white py-3 aboslute z-30 bottom-0 flex gap-2">
                        <img src="../../assets/user-pic.jpg" class="h-8 rounded-full w-auto sm:h-8" />
                        <div class="bg-gray-100 rounded-app w-full px-3 py-1 flex flex-col">
                            <input @keyup.enter="addComment" v-model="commentData" type="text"
                                placeholder="Write a comment" class="bg-gray-100 py-1 outline-none" />
                        </div>
                    </div>
                </div> -->

            </div>
        </div>

    </div>
</template>

<script setup>
import { ref } from 'vue';

const commentData = ref('')

function addComment() {
    for (let i = 0; i < posts.length; i++) {
        posts[i].comments.push({ name: 'Ray', profile_pic: '../../assets/user-pic.jpg', comment: commentData.value, postedOn: '22m' })
        commentData.value = ''
    }
}

const posts = [
    {
        user: 'DJ Khaled',
        profile_pic: '../../assets/user-pic.jpg',
        badge: '#',
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
        image: '../../assets/sign-in-pic.jpg',
        comments: [
            { name: 'Michael', profile_pic: '../../assets/user-pic.jpg', comment: 'Congrats!', postedOn: '22m' },
            { name: 'Bob', profile_pic: '../../assets/user-pic.jpg', comment: 'Where cand we see you next?', postedOn: '22m' },
            { name: 'Jhon', profile_pic: '../../assets/user-pic.jpg', comment: 'Love your songs!', postedOn: '22m' },




        ],
    },
    {
        user: 'DJ Khaled',
        profile_pic: '../../assets/user-pic.jpg',
        badge: '#',
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
        image: '../../assets/sign-in-pic.jpg',
        comments: [
            { name: 'Michael', profile_pic: '../../assets/user-pic.jpg', comment: 'Congrats!', postedOn: '22m' },
            { name: 'Bob', profile_pic: '../../assets/user-pic.jpg', comment: 'Where cand we see you next?', postedOn: '22m' },
            { name: 'Jhon', profile_pic: '../../assets/user-pic.jpg', comment: 'Love your songs!', postedOn: '22m' },
        ],
    },
    {
        user: 'DJ Khaled',
        profile_pic: '../../assets/user-pic.jpg',
        badge: '#',
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
        image: '../../assets/sign-in-pic.jpg',
        comments: [
            { name: 'Michael', profile_pic: '../../assets/user-pic.jpg', comment: 'Congrats!', postedOn: '22m' },
            { name: 'Bob', profile_pic: '../../assets/user-pic.jpg', comment: 'Where cand we see you next?', postedOn: '22m' },
            { name: 'Jhon', profile_pic: '../../assets/user-pic.jpg', comment: 'Love your songs!', postedOn: '22m' },
        ],
    },
    {
        user: 'DJ Khaled',
        profile_pic: '../../assets/user-pic.jpg',
        badge: '#',
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
        image: '../../assets/sign-in-pic.jpg',
        comments: [
            { name: 'Michael', profile_pic: '../../assets/user-pic.jpg', comment: 'Congrats!', postedOn: '22m' },
            { name: 'Bob', profile_pic: '../../assets/user-pic.jpg', comment: 'Where cand we see you next?', postedOn: '22m' },
            { name: 'Jhon', profile_pic: '../../assets/user-pic.jpg', comment: 'Love your songs!', postedOn: '22m' },
        ],
    },

]
</script>