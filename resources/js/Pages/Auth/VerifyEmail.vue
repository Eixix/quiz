<script setup>
import { computed } from 'vue';
import GuestLayout from '@/Layouts/Guest.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    status: String,
});

const form = useForm();

const submit = () => {
    form.post(route('verification.send'));
};

const verificationLinkSent = computed(() => props.status === 'verification-link-sent');
</script>

<template>
    <GuestLayout>
        <Head><title>Email Verification</title></Head>

        <v-alert border="" class="mb-2">
            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
        </v-alert>

        <v-alert border="" v-if="verificationLinkSent" class="mb-2">
            A new verification link has been sent to the email address you provided during registration.
        </v-alert>

        <ValidationErrors class="mb-2" />

        <v-form @submit.prevent="submit">
            <v-btn
                type="submit"
                :disabled="form.processing"
                color="primary"
            >
                Resend Verification Email
            </v-btn>

            <Link :href="route('logout')" method="post" as="button">
                <v-btn color="secondary">Log Out</v-btn>
            </Link>
        </v-form>
    </GuestLayout>
</template>
