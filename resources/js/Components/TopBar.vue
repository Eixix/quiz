<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    back: String,
    title: String,
});
</script>

<template>
    <v-container fluid class="top-bar">
        <Link v-if="back" :href="back" class="mr-2">
            <i class="fas fa-angle-left" />
        </Link>

        {{ title }}

        <div class="ml-auto flex flex-row">
            <slot />
        </div>
    </v-container>
</template>
