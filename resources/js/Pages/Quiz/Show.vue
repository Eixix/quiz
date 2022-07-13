<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import Question from '@/Components/Question.vue';
import TopBar from '@/Components/TopBar.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    quiz: Object,
    questions: Array,
});
</script>

<template>
    <AuthenticatedLayout>
        <Head><title>Quiz - Show</title></Head>

        <template v-slot:top-bar>
            <TopBar
                :back="route('quiz.index')"
                :title="quiz.title"
            >
                <Link :href="route('quiz.edit', quiz.id)" class="mr-2">
                    <v-btn color="primary">Edit</v-btn>
                </Link>

                <Link :href="route('quiz.destroy', quiz.id)" method="delete" as="button">
                    <v-btn color="error">Delete</v-btn>
                </Link>
            </TopBar>
        </template>

        <Question v-for="question in questions" :question="question" />
    </AuthenticatedLayout>
</template>
