<template>
    <div class="container">
        <h1 class="font-bold text-secondary text-center text-4xl">All DJs</h1>

        <!-- Filters -->
        <div class="bg-white mt-10">
            <Disclosure as="section" aria-labelledby="filter-heading"
                class="grid items-center border-t border-b border-gray-200">
                <h2 id="filter-heading" class="sr-only">Filters</h2>
                <div class="relative col-start-1 row-start-1 py-4">
                    <div class="mx-auto flex w-full space-x-6 divide-x divide-gray-200 px-4 text-sm sm:px-6 lg:px-8">
                        <div>
                            <DisclosureButton class="group flex items-center font-medium text-gray-700">
                                <FunnelIcon class="mr-2 h-5 w-5 flex-none text-gray-400 group-hover:text-gray-500"
                                    aria-hidden="true" />
                                2 Filters
                            </DisclosureButton>
                        </div>
                        <div class="pl-6">
                            <button type="button" class="text-gray-500">Clear all</button>
                        </div>
                    </div>
                </div>
                <DisclosurePanel class="border-t border-gray-200 py-10">
                    <div class="mx-auto grid max-w-7xl grid-cols-2 gap-x-4 px-4 text-sm sm:px-6 md:gap-x-6 lg:px-8">
                        <div class="grid auto-rows-min grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-6">
                            <fieldset>
                                <legend class="block font-medium">Genres</legend>
                                <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
                                    <div v-for="(option, optionIdx) in filters.genres" :key="option.value"
                                        class="flex items-center text-base sm:text-sm">
                                        <input :id="`genre-${optionIdx}`" name="genre[]" :value="option.value"
                                            type="checkbox"
                                            class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                            :checked="option.checked" />
                                        <label :for="`genre-${optionIdx}`" class="ml-3 min-w-0 flex-1 text-gray-600">{{
                                                option.label
                                        }}</label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="block font-medium">Country</legend>
                                <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
                                    <div v-for="(option, optionIdx) in filters.country" :key="option.value"
                                        class="flex items-center text-base sm:text-sm">
                                        <input :id="`country-${optionIdx}`" name="country[]" :value="option.value"
                                            type="checkbox"
                                            class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                            :checked="option.checked" />
                                        <label :for="`country-${optionIdx}`"
                                            class="ml-3 min-w-0 flex-1 text-gray-600">{{
                                                    option.label
                                            }}</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="grid auto-rows-min grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-6">
                            <fieldset>
                                <legend class="block font-medium">City</legend>
                                <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
                                    <div v-for="(option, optionIdx) in filters.city" :key="option.value"
                                        class="flex items-center text-base sm:text-sm">
                                        <input :id="`city-${optionIdx}`" name="city[]" :value="option.value"
                                            type="checkbox"
                                            class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                            :checked="option.checked" />
                                        <label :for="`city-${optionIdx}`" class="ml-3 min-w-0 flex-1 text-gray-600">{{
                                                option.label
                                        }}</label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="block font-medium">Category</legend>
                                <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
                                    <div v-for="(option, optionIdx) in filters.category" :key="option.value"
                                        class="flex items-center text-base sm:text-sm">
                                        <input :id="`category-${optionIdx}`" name="category[]" :value="option.value"
                                            type="checkbox"
                                            class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                            :checked="option.checked" />
                                        <label :for="`category-${optionIdx}`"
                                            class="ml-3 min-w-0 flex-1 text-gray-600">{{ option.label }}</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </DisclosurePanel>
                <div class="col-start-1 row-start-1 py-4">
                    <div class="mx-auto flex  justify-end  sm:px-6 md:gap-x-6 lg:px-8">
                        <Menu as="div" class="relative inline-block">
                            <div class="flex">
                                <MenuButton
                                    class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900">
                                    Sort
                                    <ChevronDownIcon
                                        class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                        aria-hidden="true" />
                                </MenuButton>
                            </div>

                            <transition enter-active-class="transition ease-out duration-100"
                                enter-from-class="transform opacity-0 scale-95"
                                enter-to-class="transform opacity-100 scale-100"
                                leave-active-class="transition ease-in duration-75"
                                leave-from-class="transform opacity-100 scale-100"
                                leave-to-class="transform opacity-0 scale-95">
                                <MenuItems
                                    class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-app bg-white shadow-2xl outline-none">
                                    <div class="py-1">
                                        <MenuItem v-for="option in sortOptions" :key="option.name" v-slot="{ active }">
                                        <a :href="option.href"
                                            :class="[option.current ? 'font-medium text-gray-900' : 'text-gray-500', active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm']">{{
                                                    option.name
                                            }}</a>
                                        </MenuItem>
                                    </div>
                                </MenuItems>
                            </transition>
                        </Menu>
                    </div>
                </div>
            </Disclosure>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 w-full mt-10">
            <div v-for="(artist, index) in allDjs" v-bind:key="index" class="w-full">
                <div class="flex justify-center w-full h-full">
                    <div class="rounded-lg w-full shadow-lg bg-white max-w-sm cursor-pointer">
                        <div class=" h-44 w-full rounded-t-lg  overflow-hidden flex justify-center items-start ">
                            <img class="rounded-t-lg object-cover object-top h-full w-full " :src="artist.image"
                                alt="artist" />
                        </div>


                        <div class="p-6 h-full">
                            <div class="flex items-center justify-start gap-2">
                                <h5 class="text-gray-900 text-lg font-bold mb-2">{{ artist.name }}</h5>
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
import { ref } from 'vue';
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { ChevronDownIcon, FunnelIcon } from '@heroicons/vue/20/solid'

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
    {
        image: 'https://djmag.com/sites/default/files/styles/lead_parallax_image__1920x1080_/public/2022-10/MGlifestyle-3.jpg?itok=9FKzW5aE',
        name: 'Martin Garrix',
        location: 'L.A.',
        genres: 'DNB, Dance',
        badge: true,
    },
    {
        image: 'https://djmag.com/sites/default/files/styles/djmag_landscape_691x372_/public/2022-10/DVLM%202.jpg?itok=Hi4d6GK2',
        name: 'Dimitri Vegas & Like Mike',
        location: 'Amsterdam',
        genres: 'EDM',
        badge: true,
    },
];

const filters = ref({
    genres: [
        { value: '0', label: 'Dance', checked: false },
        { value: '25', label: 'Techno', checked: false },
        { value: '50', label: 'DNB', checked: false },
        { value: '75', label: 'Dubstep', checked: false },
    ],
    country: [
        { value: 'white', label: 'Romania', checked: false },
        { value: 'beige', label: 'Belgium', checked: false },
        { value: 'blue', label: 'Netherlands', checked: true },
        { value: 'brown', label: 'Spain', checked: false },
        { value: 'green', label: 'United Kingdom.', checked: false },
        { value: 'purple', label: 'Norway', checked: false },
    ],
    city: [
        { value: 'xs', label: 'Bucharest', checked: false },
        { value: 's', label: 'Cluj-Napoca', checked: true },
        { value: 'm', label: 'Amsterdam', checked: false },
        { value: 'l', label: 'London', checked: false },
        { value: 'xl', label: 'Madrid', checked: false },
        { value: '2xl', label: 'Brussels', checked: false },
    ],
    category: [
        { value: 'all-new-arrivals', label: 'Rising Stars', checked: false },
        { value: 'tees', label: 'Top 100', checked: false },
        { value: 'objects', label: 'New Arrivals', checked: false },

    ],
});

const sortOptions = [
    { name: 'Most Popular', href: '#', current: true },
    { name: 'Best Rating', href: '#', current: false },
    { name: 'Newest', href: '#', current: false },
]

</script>