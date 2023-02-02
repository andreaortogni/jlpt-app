<template>

    <div class="bg-gray-200 border border-gray-200 rounded max-w-md">
        <img class="m-auto" src="/assets/img/test-img.png" alt="kanji" />

        <div class="py-6 px-5">
            <span class="font-bold">Grammar files for {{ level }}
            </span>
        </div>
    </div>

    <div class="bg-gray-200 border border-gray-200 rounded max-w-md">
        <img class="m-auto" src="/assets/img/test-img.png" alt="kanji" />

        <div class="py-6 px-5">
            <span class="font-bold">Kanji for {{ level }}</span>
        </div>
    </div>

    <div class="bg-gray-200 border border-gray-200 rounded max-w-md">
        <img class="m-auto" src="/assets/img/test-img.png" alt="kanji" />

        <div class="py-6 px-5">
            <span class="font-bold">Basic vocabulary for {{ level }}</span>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    level: String
});
</script>