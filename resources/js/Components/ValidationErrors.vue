<script setup>
import { computed } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';

const errors = computed(() => usePage().props.value.errors);

const hasErrors = computed(() => Object.keys(errors.value).length > 0);
</script>

<template>
    <div v-if="hasErrors">
        <v-alert border="" type="error" title="Whoops! Something went wrong.">
            <ul>
                <li v-for="(error, key) in errors" :key="key">{{ error }}</li>
            </ul>
        </v-alert>
    </div>
</template>
