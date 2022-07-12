<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import ValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    quiz: Object,
});

const form = useForm({
    title: props.quiz.title,
});

const submit = () => {
    form.put(route('quiz.update', props.quiz.id), {
        onFinish: () => form.reset('title'),
    });
};
</script>

<template>
    <AuthenticatedLayout>
        <Head><title>Quiz - Create</title></Head>

        <Link :href="route('quiz.show', quiz.id)">
            <v-btn color="primary">Back</v-btn>
        </Link>

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
                Edit
            </v-btn>
        </v-form>
    </AuthenticatedLayout>
</template>
