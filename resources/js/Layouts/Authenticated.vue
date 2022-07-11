<script setup>
import {Link} from '@inertiajs/inertia-vue3';
</script>

<template>
    <v-app theme="dark">
        <v-navigation-drawer
            image="https://cdn.vuetifyjs.com/images/backgrounds/bg-2.jpg"
            permanent=""
            theme="dark"
        >
            <v-list>
                <v-list-item
                    prepend-avatar="https://randomuser.me/api/portraits/women/85.jpg"
                    :title="$page.props.auth.user.name"
                    :subtitle="$page.props.auth.user.email"
                ></v-list-item>
            </v-list>

            <v-divider></v-divider>
            <v-list nav>
                <Link :href="route('dashboard')">
                    <v-list-item
                        :active="route().current('dashboard')"
                        prepend-icon="fas fa-home"
                        title="Dashboard"
                        value="inbox">
                    </v-list-item>
                </Link>
            </v-list>

            <v-list nav>
                <Link :href="route('room.index')">
                    <v-list-item
                        :active="route().current('room.*')"
                        prepend-icon="fas fa-person-booth"
                        title="Room"
                        value="inbox">
                    </v-list-item>
                </Link>
            </v-list>

            <template v-slot:append>
                <Link :href="route('logout')" method="post" as="button">
                    <div class="pa-2">
                        <v-btn block>
                            Logout
                        </v-btn>
                    </div>
                </Link>
            </template>
        </v-navigation-drawer>

        <!-- Sizes your content based upon application components -->
        <v-main>

            <!-- Provides the application the proper gutter -->
            <v-container fluid>
                <slot/>
            </v-container>
        </v-main>

        <v-footer app>
            <!-- TODO: Footer -->
        </v-footer>
    </v-app>
</template>
