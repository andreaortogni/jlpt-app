<template>
    <Head title="Welcome" />

    <ApplicationLayout>
        <label for="select-level" class="pr-2">Select JLPT Level</label>
        
        <select name="select-level" id="select-level" v-model="selectedLevel">
          <option 
            v-for="level in levels" 
            v-bind:key="level.id" 
            :value="level"
          >
            {{ level.description }}
          </option>
        </select>

        <div class="pt-6 pb-3 text-red-700 text-2xl font-bold">
          <span>Learning {{ selectedLevel.description }}</span>
        </div>

        <div id="cards" class="">
          <CardComponent :level="selectedLevel.description" :levelId="selectedLevel.id"></CardComponent>
        </div>
    </ApplicationLayout>
</template>

<script setup>
import { ref, onBeforeMount } from 'vue';
import { Head } from '@inertiajs/vue3';
import ApplicationLayout from '@/Layouts/ApplicationLayout.vue';
import CardComponent from '@/Components/CardComponent.vue';

const props = defineProps({
  levels: {
    type: Array,
    default: []
  }
});

var selectedLevel = ref(null);

onBeforeMount(() => {
  selectedLevel.value = props.levels[0];
});
</script>