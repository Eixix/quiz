<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import {Head} from '@inertiajs/inertia-vue3';
</script>

<template>
        <Head><title>Dashboard</title></Head>

        <AuthenticatedLayout>
            <template v-slot:content>
                <!-- Template here -->
            </template>
        </AuthenticatedLayout>
</template>
