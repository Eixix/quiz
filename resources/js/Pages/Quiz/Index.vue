<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    quizzes: Array,
});
</script>

<template>
    <AuthenticatedLayout>
        <Head><title>Quiz</title></Head>

        <Link :href="route('quiz.create')">
            <v-btn color="primary">Create</v-btn>
        </Link>

        <v-table class="mt-2">
            <thead>
                <tr>
                    <th class="text-left">ID</th>
                    <th class="text-left">Title</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="quiz in quizzes" :key="quiz.id" >
                    <td>{{ quiz.id }}</td>
                    <td>{{ quiz.title }}</td>
                    <td>
                        <div class="flex flex-row">
                            <Link :href="route('quiz.show', quiz.id)" class="mr-2">
                                <v-btn color="primary">Show</v-btn>
                            </Link>

                            <Link :href="route('quiz.edit', quiz.id)">
                                <v-btn color="primary">Edit</v-btn>
                            </Link>
                        </div>
                    </td>
                </tr>
            </tbody>
          </v-table>
    </AuthenticatedLayout>
</template>
