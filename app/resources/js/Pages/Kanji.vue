<template>
    <Head title="Kanji" />

    <ApplicationLayout :title="'Kanji - ' + level.description">
        <div class="grid grid-cols-4 bg-red-700 text-gray-100 sticky top-0 font-bold text-lg">
            <span class="p-2 px-4">Kanji</span>
            <span class="p-2 px-4 border-l-gray-100 border-l">Onyomi</span>
            <span class="p-2 px-4 border-l-gray-100 border-l">Kunyomi</span>
            <span class="p-2 px-4 border-l-gray-100 border-l">Translations</span>
        </div>

        <div 
            v-for="kanji in kanjiList"
            class="grid grid-cols-4 bg-gray-200 text-gray-800 border-b-gray-100 border-b"
        >
            <span class="p-2 px-4">{{ kanji.kanji.symbol }}</span>
            <span class="p-2 px-4 border-l-gray-100 border-l">{{ kanji.kanji.onyomi }}</span>
            <span class="p-2 px-4 border-l-gray-100 border-l">{{ kanji.kanji.kunyomi }}</span>
            <span class="p-2 px-4 border-l-gray-100 border-l">
                <span v-for="translation in kanji.translations">{{ $t(translation.translation) }} <br></span>
            </span>
        </div>
    </ApplicationLayout>
</template>

<script setup>
    import ApplicationLayout from '@/Layouts/ApplicationLayout.vue';
    import { Head } from '@inertiajs/vue3';

    const props = defineProps({
        level: Object,
        kanjiList: Array
    });
</script>