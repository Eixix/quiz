<script setup>
import GuestLayout from '@/Layouts/Guest.vue';
import ValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <GuestLayout>
        <Head><title>Forgot Password</title></Head>

        <v-alert border="" class="mb-4">
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
        </v-alert>

        <v-alert v-if="status" border="" class="mb-4">
            {{ status }}
        </v-alert>

        <ValidationErrors class="mb-4" />

        <v-form @submit.prevent="submit">
            <v-text-field
                prepend-inner-icon="fa-solid fa-envelope"
                v-model="form.email"
                label="Email"
                required
                autofocus=""
                autocomplete="username"
            ></v-text-field>

            <v-btn
                class="mt-2"
                type="submit"
                :disabled="form.processing"
                color="primary"
            >
                Email Password Reset Link
            </v-btn>
        </v-form>
    </GuestLayout>
</template>
