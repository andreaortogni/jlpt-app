<template>
    <div class="flex justify-between items-center">
        <div v-for="card in cards" class="bg-gray-200 border border-gray-200 rounded max-w-md">
            <img class="m-auto" :src="card.img" alt="kanji" />

            <div class="py-6 px-5">
                <span class="font-bold">{{ card.title }} {{ level }}</span>
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
        img: "/assets/img/test-img.png",
        title: "Grammar files for "
    },
    {
        img: "/assets/img/test-img.png",
        title: "Kanji for "
    },
    {
        img: "/assets/img/test-img.png",
        title: "Basic vocabulary for "
    },
]);
</script>