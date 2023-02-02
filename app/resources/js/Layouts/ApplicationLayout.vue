<template>
    <div class="flex flex-col h-full bg-gray-100 text-gray-800">

        <header class="px-3 py-3 flex justify-center items-center text-red-700">
            <Link href="/">
                <ApplicationLogo class="h-12 w-auto fill-current"></ApplicationLogo>
            </Link>
            
            <div class="flex-auto flex flex-col justify-center items-center">
                <h1 v-if="title" class="font-extrabold text-3xl mb-2">{{title}}</h1>
                <h3 v-if="subTitle" class="font-bold text-lg">{{ subTitle }}</h3>
            </div>
        </header>

        <div class="flex-auto px-36 pt-5 pb-2">
            <div class="flex-auto">
                <slot />
            </div>
        </div>

        <footer class="border-t-gray-200 border-t py-5 px-3">
            footer content
        </footer>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

defineProps({
  title: {
    type: String,
    default: "JLPT App"
  },

  subTitle:  {
    type: String,
    default: "Japanese Language Proficiency Test"
  }
})
</script>