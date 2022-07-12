<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    quiz: Object,
});
</script>

<template>
    <AuthenticatedLayout>
        <Head><title>Quiz - Show</title></Head>

        <div class="flex flex-row">
            <Link :href="route('quiz.index')" class="mr-2">
                <v-btn color="primary">Back</v-btn>
            </Link>

            <Link :href="route('quiz.edit', quiz.id)" class="mr-2">
                <v-btn color="primary">Edit</v-btn>
            </Link>

            <Link :href="route('quiz.destroy', quiz.id)" method="delete" as="button">
                <v-btn color="error">Delete</v-btn>
            </Link>
        </div>

        <h1>{{ quiz.title }}</h1>
    </AuthenticatedLayout>
</template>
