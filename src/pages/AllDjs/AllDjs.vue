<template>
    <div class="container">
        <h1 class="font-bold text-secondary text-4xl">All DJs</h1>

        <div class="grid grid-cols-4 gap-5 w-full mt-10">
            <div v-for="(artist, index) in allDjs" v-bind:key="index">
                <div class="flex justify-center">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm">

                        <img class="rounded-t-lg h-44 w-full" :src="artist.image" alt="" />

                        <div class="p-6">
                            <div class="flex items-center justify-start gap-2">
                                <h5 class="text-gray-900 text-xl font-bold mb-2">{{ artist.name }}</h5>
                                <svg v-if="artist.badge" xmlns="http://www.w3.org/2000/svg" width="215" height="15"
                                    fill="currentColor" class="bi bi-patch-check-fill w-4 h-4 mb-1 flex items-center"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                </svg>
                            </div>
                            <div class="flex flex-col gap-1">

                                <p class="text-gray-400 text-base ">
                                    <span class="text-secondary">Location:</span>
                                    {{ artist.location }}
                                </p>
                                <p class="text-gray-400 text-base ">
                                    <span class="text-secondary">Genres:</span>
                                    {{ artist.genres }}
                                </p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script setup>

const allDjs = [
    {
        image: 'https://www.billboard.com/wp-content/uploads/media/calvin-harris-press-2015-billboard-1548-b.jpg?w=942&h=623&crop=1',
        name: 'Calvin Harris',
        location: 'California',
        genres: 'Big Room Tech, Dance, Pop',
        badge: true,
    },
    {
        image: 'https://d3vhc53cl8e8km.cloudfront.net/artists/128/nazYPuVuPjWUG96rWPehcZYIDbBUVLbVc9MPZJJC.jpeg',
        name: 'Steve Aoki',
        location: 'L.A.',
        genres: 'DNB, Dubstep',
        badge: true,
    },
];

</script>