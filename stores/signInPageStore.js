import { defineStore } from 'pinia'
import {ref} from 'vue'

export const useLoginModalStore = defineStore('modalStore', () => {
    
    const isPageOpen= ref(false);
    function openPage() {
        isPageOpen.value = true
    };
    function closePage() {
        isPageOpen.value = false
    };
  
    return { isPageOpen, openPage, closePage}
  })