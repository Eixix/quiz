<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    quiz: Object,
})
</script>

<template>
    <AuthenticatedLayout>
        <Head><title>Quiz - Show</title></Head>

        <Link :href="route('quiz.index')" class="mb-4">
            <v-btn
                color="primary"
            >
                Back
            </v-btn>
        </Link>

        <div>{{ quiz.title }}</div>
    </AuthenticatedLayout>
</template>
