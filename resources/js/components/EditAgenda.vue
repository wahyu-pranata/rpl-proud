<template>
    <div class="max-w-3xl space-y-6 my-6">
        <!-- Tombol Tambah Agenda -->
        <button type="button" ref="addAgendaButton" @click="agendaList.push(1)" class="flex items-center space-x-2 text-black hover:text-blue-700">
            <div
                class="flex items-center justify-center w-10 h-10 text-blue-600 bg-white border-2 rounded-lg border-gray-600 hover:bg-blue-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="black"
                    class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </div>
            <span class="text-medium">Tambah Agenda</span>
        </button>
        <!-- Daftar Agenda -->
        <div class="space-y-4">
            <!-- Contoh Template Agenda -->
            <div class="bg-blue-100 p-4 rounded-lg flex items-center space-x-4" v-for="(agenda, index) in agendaList">
                <!-- Nama Agenda -->
                <input required type="text" name="agenda_names[]" placeholder="Nama Agenda"
                    class="flex-1 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <!-- Waktu Agenda -->
                <div class="relative flex-1">
                    <input required type="text" id="endDate" name="agenda_dates[]"
                        class="date-placeholder w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Waktu Agenda"
                        onfocus="(this.type='date'); this.classList.remove('date-placeholder');"
                        onblur="if(!this.value){ this.type='text'; this.classList.add('date-placeholder'); }">
                </div>
                <!-- Tombol Hapus -->
                <button type="button" @click="agendaList.splice(index, 1)"
                    class="w-8 h-8 border-2 border-red-500 text-red-500 flex items-center justify-center rounded-md hover:bg-red-500 hover:text-white remove-agenda">
                    <span class="font-semibold text-4xl align-text-top">-</span>
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'

const agendaList = ref([1])

</script>
