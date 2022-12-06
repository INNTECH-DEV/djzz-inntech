<template>
    <footer class="bg-white" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="mt-12 border-t border-gray-200 pt-8">
                <p class="text-base text-gray-400 xl:text-center text-bold">
                    Esti autentificat ca {{ user.denumire_firma }}. energoDOCS
                    v1.0 BETA
                </p>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    data() {
        return {
            user: this.$store.state.auth.user,
            auth: this.$store.state.auth,
        };
    },
};
</script>
