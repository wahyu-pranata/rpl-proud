import './bootstrap';

import Alpine from 'alpinejs';

import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import { createApp } from 'vue';
import Broadcast from './components/Broadcast.vue';
import InputSie from './components/InputSie.vue';
import EditAgenda from './components/EditAgenda.vue';


window.Alpine = Alpine;

Alpine.start();

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 5, // Adjust slides per view
    spaceBetween: 60, // Space between slides
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    slidesOffsetBefore: 40, // Tambahkan offset di awal
});

createApp({})
    .component('InputSie', InputSie)
    .component('EditAgenda', EditAgenda)
    .component('Broadcast', Broadcast)
    .mount('#app')
