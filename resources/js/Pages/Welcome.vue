<script setup>
import GuestLayout from '@/Layouts/Guest.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <GuestLayout>
            <Head><title>Welcome</title></Head>
            This is our landing page

    </GuestLayout>

</template>
