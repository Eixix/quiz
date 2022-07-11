<script setup>
</script>

<template>
    <v-app theme="dark">
        <!-- Sizes your content based upon application components -->
        <v-main>
            <!-- Provides the application the proper gutter -->
            <v-container>
                <slot />
            </v-container>
        </v-main>

        <v-footer app>
            <!-- TODO: Footer -->
        </v-footer>
    </v-app>
</template>
