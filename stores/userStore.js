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
      age:'27',
      ranking:'12 worldwide',
      genres:['Dance','DnB','Techno'],
      badge:true,
      songs: [
        'https://www.youtube.com/watch?v=J9NQFACZYEU',
        'https://www.youtube.com/watch?v=YzujNk-yYrE',
        'https://www.youtube.com/watch?v=XO4msvIA7cw',
        'https://www.youtube.com/watch?v=ooZwmeUfuXg',
        'https://www.youtube.com/watch?v=D2_qw8O5lf0',
        'https://www.youtube.com/watch?v=D2_qw8O5lf0',
      ],
      attended_events:[
        {name:'Coachella', date:'12.04.2021', location:'Ibiza', description:'Best electronic music festival'},
        {name:'Tommorrowland', date:'05.06.2021', location:'Madrid', description:'Best electronic music festival'},
        {name:'Neversea', date:'12.04.2021', location:'Constanta', description:'Best electronic music festival'},
        {name:'Untold', date:'12.06.2021', location:'Cluj-napoca', description:'Best electronic music festival'},
        
      ],
      social_media:[
        'https://www.instagram.com/calvinharris/',
        'https://www.facebook.com/calvinharris',
        'https://www.youtube.com/channel/UCIjYyZxkFucP_W-tmXg_9Ow',
      ],
      description: "The prodigious young Dutchman is still only 26, having broken through onto the scene in his mid-teens via his proto-EDM tune ‘Animals’, and scooped the Top 100 DJs crown in 2016 and the subsequent two years. His great friend and mentor David Guetta won the poll the last two years, and now Garrix is back on top.It’s a placing that is well deserved — and not completely unexpected. Garrix really is up there in the superstar bracket now, transcending the dance scene to mingle alongside the likes of Ed Sheeran, Dua Lipa, Usher and U2, all of whom he has collaborated with. His fourth victory takes him above Guetta and his other great friend and mentor, Tiësto, in the all-time DJ popularity stakes, and is second only to Dutch trance overlord Armin van Buuren, with his five No.1s. How does that notoriety feel to Martin?",
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