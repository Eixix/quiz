<script setup>
defineProps({
    question: Object,
});
</script>

<template>
    <v-card class="mt-2">
        <v-card-item>
            <v-card-title>{{ question.question }}</v-card-title>
        </v-card-item>

        <v-card-text v-for="answer in question.answers">
            {{ answer.answer }}
        </v-card-text>
    </v-card>
</template>
