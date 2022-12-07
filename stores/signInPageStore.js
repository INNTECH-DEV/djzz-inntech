import { defineStore } from 'pinia'
import {ref} from 'vue'

export const useSignInModalStore = defineStore('modalStore', () => {
    
    const isPageOpen= ref(false);
    function openPage() {
        isPageOpen.value = true
    };
    function closePage() {
        isPageOpen.value = false
    };
  
    return { isPageOpen, openPage, closePage}
  })