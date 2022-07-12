<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <v-app theme="dark">
        <v-app-bar
            color="teal-darken-4"
            image="https://picsum.photos/1920/1080?random"
        >
            <template v-slot:image>
                <v-img
                    gradient="to top right, rgba(19,84,122,.8), rgba(128,208,199,.8)"
                ></v-img>
            </template>

            <v-app-bar-title>QUIZ</v-app-bar-title>

            <v-spacer></v-spacer>

            <Link :href="route('login')">
                <v-btn color="white" :active="route().current('login')">
                    Login
                </v-btn>
            </Link>

            <Link :href="route('register')">
                <v-btn color="white" :active="route().current('register')">
                    Register
                </v-btn>
            </Link>
        </v-app-bar>

        <!-- Sizes your content based upon application components -->
        <v-main>
            <!-- Provides the application the proper gutter -->
            <v-container>
                <slot/>
            </v-container>
        </v-main>

        <v-footer app>
            <!-- TODO: Footer -->
        </v-footer>
    </v-app>
</template>
