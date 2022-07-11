<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
    title: ''
});

const submit = () => {
    form.post(route('quiz.store'), {
        onFinish: () => form.reset('title'),
    });
};
</script>

<template>
    <AuthenticatedLayout>
        <Head><title>Quiz - Create</title></Head>

        <Link :href="route('quiz.index')" class="mb-4">
            <v-btn
                color="primary"
            >
                Back
            </v-btn>
        </Link>

        <v-form @submit.prevent="submit">
            <v-text-field
                prepend-inner-icon="fa-solid fa-question"
                v-model="form.title"
                label="Title"
                required
                autofocus=""
            ></v-text-field>

            <v-btn
                type="submit"
                :disabled="form.processing"
                color="primary"
            >
                Create
            </v-btn>
        </v-form>
    </AuthenticatedLayout>
</template>
