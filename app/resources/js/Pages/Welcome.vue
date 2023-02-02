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

        <div>
          <span>Learning {{ selectedLevel.description }}</span>
        </div>

        <div id="cards">

        </div>
    </ApplicationLayout>
</template>

<script setup>
import { ref, onMounted, onBeforeMount } from 'vue';
import { Head } from '@inertiajs/vue3';
import ApplicationLayout from '@/Layouts/ApplicationLayout.vue';

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