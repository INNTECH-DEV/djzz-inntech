<template>
  <div class="">
    <div class="min-h-[calc(100vh-110px)]  ">
      <div class="fixed  z-50 w-full " v-if="!userStore.isLoggedIn">
        <GuestHeader v-if="$route.path != '/sign-in' && $route.path != '/sign-up'" />
      </div>
      <div class="fixed  z-50 w-full " v-else>
        <Header />
      </div>
      <div :class="$route.path != '/sign-in' && $route.path != '/sign-up' ? 'pt-28 sm:pt-40 pb-28 sm:pb-40' : ''">
        <router-view />
      </div>
    </div>
    <Footer v-if="$route.path != '/sign-in' && $route.path != '/sign-up'" />


  </div>

</template>

<script setup>

import { useUserStore } from '../stores/userStore';
import GuestHeader from './components/GuestHeader/GuestHeader.vue';
import Footer from './components/Footer/Footer.vue';
import Header from './components/Header/Header.vue';

const userStore = useUserStore()



</script>


