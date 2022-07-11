<script setup>
import GuestLayout from '@/Layouts/Guest.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';
import {ref} from "vue";

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};

const showPassword = ref(false);
const rules = {
    required: value => !!value || 'Required.',
    min: v => v.length >= 8 || 'Min 8 characters',
}
</script>

<template>
    <GuestLayout>
            <Head><title>Login</title></Head>

            <BreezeValidationErrors class="mb-4"/>

            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>

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
                    name="input-10-1"
                    label="Password"
                    hint="At least 8 characters"
                    counter
                    required
                    @click:append="showPassword = !showPassword"
                ></v-text-field>


                <v-checkbox
                    v-model="form.remember"
                    label="Remember me"
                ></v-checkbox>

                <Link v-if="canResetPassword" :href="route('password.request')">
                    <v-btn
                        color="secondary"
                    >
                        Forgot your password?
                    </v-btn>
                </Link>

                <v-btn class="mt-2"
                    type="submit"
                    :disabled="form.processing"
                    color="primary"
                >
                    Login
                </v-btn>
            </v-form>
    </GuestLayout>
</template>
