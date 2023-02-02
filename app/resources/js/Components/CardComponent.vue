<template>
    <div class="flex justify-between items-center">
        <div v-for="card in cards" class="bg-gray-200 border border-gray-200 rounded-lg max-w-md">
            <img class="m-auto p-6 max-h-350" :src="card.img" alt="kanji" />

            <div class="py-6 px-5">
                <span class="font-bold text-red-700">{{ card.title }} - {{ level }}</span>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
    level: String
});

var cards = ref([
    {
        img: "/assets/img/grammar.png",
        title: "Grammar files"
    },
    {
        img: "/assets/img/kanji.png",
        title: "Kanji"
    },
    {
        img: "/assets/img/vocabulary.png",
        title: "Basic vocabulary"
    },
]);
</script>