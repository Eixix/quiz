<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import BreezeButton from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
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

    <Head title="Quiz" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Quiz
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <!-- <form @submit.prevent="submit"> -->
                        <!--     <div> -->
                        <!--         <BreezeLabel for="title" value="Title" /> -->
                        <!--         <BreezeInput id="title" type="text" class="mt-1 block w-full" v-model="form.title" -->
                        <!--             required autofocus autocomplete="title" /> -->
                        <!--     </div> -->

                        <!--     <div class="flex items-center justify-end mt-4"> -->
                        <!--         <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" -->
                        <!--             :disabled="form.processing"> -->
                        <!--             Create -->
                        <!--         </BreezeButton> -->
                        <!--     </div> -->
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
