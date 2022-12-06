import { defineStore } from 'pinia'
import {ref} from 'vue'

export const useSignupModalStore = defineStore('modalSignupStore', () => {
    
    const isSignupPageOpen= ref(false);
    function openPage() {
        isSignupPageOpen.value = true
    };
    function closePage() {
        isSignupPageOpen.value = false
    };
  
    return { isSignupPageOpen, openPage, closePage}
  })