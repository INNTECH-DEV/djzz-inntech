import { defineStore } from 'pinia'
import {ref} from 'vue'

export const useUserStore = defineStore('userStore', () => {
    const user = ref('Eduardo');
    const isLoggedIn = ref(false);
    function login() {
      isLoggedIn.value = true
    };
    function logout() {
      isLoggedIn.value = false
    };
  
    return { user, login, logout, isLoggedIn }
  })