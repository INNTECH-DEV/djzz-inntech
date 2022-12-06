<template>
    <div>
        <div v-if="loginPageStore.isPageOpen == true">
            <Login />
        </div>
        <div v-if="signUpPageStore.isPageOpen == true">
            <SignUp />
        </div>
        Hello!
    </div>
</template>

<script setup>
import Login from '../Login/Login.vue';
import { useLoginModalStore } from '../../../stores/signInPageStore'
import { useSignupModalStore } from '../../../stores/signUpPageStore'
import SignUp from '../../pages/SignUp/SignUp.vue';

const loginPageStore = useLoginModalStore()
const signUpPageStore = useLoginModalStore()

</script>