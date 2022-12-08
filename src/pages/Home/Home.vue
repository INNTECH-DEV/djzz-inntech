<template>
    <div>
        <div v-if="signInPageStore.isPageOpen && !userStore.isLoggedIn">
            <SignIn />
        </div>
        <div v-if="signUpPageStore.isPageOpen == true && userStore.isLoggedIn == false">
            <SignUp />
        </div>

    </div>
</template>

<script setup>
import SignIn from '../SignIn/SignIn.vue';
import { useSignInModalStore } from '../../../stores/signInPageStore'
import { useSignupModalStore } from '../../../stores/signUpPageStore'
import { useUserStore } from '../../../stores/userStore'
import SignUp from '../../pages/SignUp/SignUp.vue';

const signInPageStore = useSignInModalStore()
const signUpPageStore = useSignupModalStore()
const userStore = useUserStore()

</script>