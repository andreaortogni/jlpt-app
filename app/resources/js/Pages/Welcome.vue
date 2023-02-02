<template>
    <Head title="Welcome" />

    <ApplicationLayout>
        <label for="select-level" class="pr-2">Select JLPT Level</label>
        
        <select name="select-level" id="select-level" v-model="selectedLevel">
          <option 
            v-for="level in levels" 
            v-bind:key="level.id" 
            :value="level.id"
          >
            {{ level.description }}
          </option>
        </select>
    </ApplicationLayout>
</template>

<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';
import ApplicationLayout from '@/Layouts/ApplicationLayout.vue';

defineProps({
  levels: {
    type: Array,
    default: []
  }
});

const selectedLevel = ref(1);

</script>