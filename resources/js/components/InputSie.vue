<template>
    <div class="flex items-center mb-4">
        <button type="button" id="addSieButton" @click="sieArr.push($refs.sieInput.value.trim())"
            class="flex items-center justify-center w-10 h-10 text-blue-600 bg-white border-2 rounded-lg border-gray-600 hover:bg-blue-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="black"
                class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </button>
        <input required type="text" id="sieInput" ref="sieInput" placeholder="Tambah Sie yang dibutuhkan"
            class="ml-3 flex-grow px-3 py-2 text-sm border border-gray-500 rounded-lg hover:border-black focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
        <input type="hidden" name="event_divisions[]" v-for="sie in sieArr" :value="sie">
    </div>
    <div id="sieList" class="flex flex-wrap gap-3 mb-4">
        <!-- Chips will be added dynamically here -->
        <div v-for="(sie, index) in sieArr"
            class="flex items-center gap-2 px-3 py-2 border border-gray-300 rounded-lg bg-white shadow-sm">
            <span>{{ sie }}</span>
            <button type="button"
                class="w-5 h-5 flex items-center justify-center rounded-full bg-red-600 text-white text-sm font-bold hover:bg-red-700"
                @click="sieArr.splice(index, 1)">
                -
            </button>
        </div>
    </div>
</template>


<script setup>
import { ref } from 'vue'

const props = defineProps(['divisions'])

const sieArr = ref([])

if (props.divisions) {
    for (const division of props.divisions) {
        sieArr.value.push(division.name)
    }
}


</script>
