import { defineStore } from 'pinia'
import {ref} from 'vue'

import {useLocalStorage} from '@vueuse/core';

export const useUserStore = defineStore('userStore', () => {
    const user = ref(useLocalStorage('vueUseUser','Eduardo'));
    const isLoggedIn = ref(useLocalStorage('vueUseLogin',false));
    const isRegistered = ref(useLocalStorage('vueUseRegister',false));

    const profileData = ref(useLocalStorage('vueUseProfileData', {
      name:'Calvin Harris',
      profile_pic:'https://www.billboard.com/wp-content/uploads/media/calvin-harris-press-2015-billboard-1548-b.jpg?w=942&h=623&crop=1',
      adress:'California',
      ranking:'12 worldwide',
      badge:true,
      songs: [
        'https://www.youtube.com/watch?v=J9NQFACZYEU',
        'https://www.youtube.com/watch?v=YzujNk-yYrE',
        'https://www.youtube.com/watch?v=XO4msvIA7cw',
        'https://www.youtube.com/watch?v=ooZwmeUfuXg',
        'https://www.youtube.com/watch?v=D2_qw8O5lf0',
      ],
      attended_events:[
        {name:'Coachella', date:'12.04.2021', location:'Ibiza', description:'Best electronic music festival'},
        {name:'TommorrowLand', date:'05.06.2021', location:'Madrid', description:'Best electronic music festival'},
        {name:'Neversea', date:'12.04.2021', location:'Constanta', description:'Best electronic music festival'},
        {name:'Untold', date:'12.06.2021', location:'Cluj-napoca', description:'Best electronic music festival'},
        
      ],
      social_media:[
        'https://www.instagram.com/calvinharris/',
        'https://www.facebook.com/calvinharris',
        'https://www.youtube.com/channel/UCIjYyZxkFucP_W-tmXg_9Ow',
      ],
    }))
 
    function login() {
      isLoggedIn.value = true
     
    };
    function logout() {
      isLoggedIn.value = false
    };

    function register(){
      isRegistered.value = true
    }
  
    return { user, login, logout, register, profileData, isLoggedIn }
  })