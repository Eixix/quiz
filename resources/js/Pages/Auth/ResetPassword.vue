<script setup>
import GuestLayout from '@/Layouts/Guest.vue';
import ValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    email: String,
    token: String,
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.update'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

const showPassword = ref(false);
const rules = {
    required: value => !!value || 'Required.',
    min: v => v.length >= 8 || 'Min 8 characters',
};
</script>

<template>
    <GuestLayout>
        <Head><title>Reset Password</title></Head>

        <ValidationErrors class="mb-2" />

        <v-form @submit.prevent="submit">
            <v-text-field
                prepend-inner-icon="fa-solid fa-envelope"
                v-model="form.email"
                label="Email"
                required
                autofocus=""
                autocomplete="username"
            ></v-text-field>

            <v-text-field
                prepend-inner-icon="fa-solid fa-key"
                v-model="form.password"
                :append-icon="showPassword ? 'fa-solid fa-eye' : 'fa-solid fa-eye-slash'"
                :rules="[rules.required, rules.min]"
                :type="showPassword ? 'text' : 'password'"
                label="Password"
                hint="At least 8 characters"
                counter
                required
                @click:append="showPassword = !showPassword"
            ></v-text-field>

            <v-text-field
                prepend-inner-icon="fa-solid fa-key"
                v-model="form.password_confirmation"
                :rules="[rules.required, rules.min]"
                type="password"
                label="Password confirm"
                counter
                required
            ></v-text-field>

            <v-btn
                type="submit"
                :disabled="form.processing"
                color="primary"
            >
                Reset Password
            </v-btn>
        </v-form>
    </GuestLayout>
</template>
