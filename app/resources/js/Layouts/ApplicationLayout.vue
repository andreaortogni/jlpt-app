<template>
    <div class="flex flex-col h-full bg-gray-100 text-gray-800">

        <header class="px-3 py-3 grid grid-cols-3 text-red-700">
            <Link href="/">
                <ApplicationLogo class="h-12 w-12 fill-current"></ApplicationLogo>
            </Link>
            
            <div class="flex-auto flex flex-col justify-center items-center">
                <h1 v-if="title" class="font-extrabold text-3xl mb-2">{{title}}</h1>
                <h3 v-if="subTitle" class="font-bold text-lg">{{ subTitle }}</h3>
            </div>

            <div class="h-12">
                <div class="pr-5 text-right">
                    <select v-model="lang" @change="changeLanguage(lang)" name="lang-select" class="rounded w-18" id="lang-select">
                        <option value="it">It</option>
                        <option value="en">En</option>
                    </select>
                </div>
            </div>
        </header>

        <div class="flex-auto px-20 pt-12 pb-2">
            <div class="flex-auto">
                <slot />
            </div>
        </div>

        <footer class="border-t-gray-200 border-t py-5 px-3">
            <div class="w-full text-center">
                <div class="mb-3">
                    <span>Author: <a href="mailto:andreaortogni@gmail.com">Andrea Ortogni</a></span>
                </div>
                <div class="w-full flex flex-row justify-center">
                    <a target="_blank" href="https://github.com/andreaortogni/jlpt-app">
                        <img class="max-h-32 mr-4" src="/assets/img/github.png" alt="">
                    </a>
                    <a target="_blank" href="https://www.twitter.com/orto_dev">
                        <img class="max-h-32" src="/assets/img/twitter.png" alt="">
                    </a>
                </div>
            </div>
        </footer>
    </div>
</template>

<script setup>
import { onMounted, ref, onBeforeMount} from 'vue';
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { loadLanguageAsync } from 'laravel-vue-i18n';

let lang = ref((sessionStorage.getItem('lang')) ? sessionStorage.getItem('lang') : 'en');

defineProps({
  title: {
    type: String,
    default: "JLPT App"
  },

  subTitle:  {
    type: String,
    default: "Japanese Language Proficiency Test"
  }
});

onBeforeMount(()=> {
    loadLanguageAsync(lang.value);
});

function changeLanguage(lang) {
    sessionStorage.setItem("lang", lang);
    loadLanguageAsync(lang);
}
</script>