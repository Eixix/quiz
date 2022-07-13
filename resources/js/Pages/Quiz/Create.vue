<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import TopBar from '@/Components/TopBar.vue';
import ValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
    title: '',
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

        <template v-slot:top-bar>
            <TopBar title="Create Quiz" :back="route('quiz.index')" />
        </template>

        <ValidationErrors class="mt-2" />

        <v-form @submit.prevent="submit" class="mt-2">
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
