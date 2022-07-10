<script setup>
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <v-app>
        <!-- Sizes your content based upon application components -->
        <v-main>
            <!-- Provides the application the proper gutter -->
            <v-container fluid>
                <slot name="content"/>
            </v-container>
        </v-main>

        <v-footer app>
            <!-- TODO: Footer -->
        </v-footer>
    </v-app>
</template>
