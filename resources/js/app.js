require('./bootstrap');

import { createApp } from "vue";
import router from "./router";
import Alpine from 'alpinejs';
import Toaster from "@meforma/vue-toaster";
window.Alpine = Alpine;
Alpine.start();

import PostIndex from "@/Pages/PostIndex.vue";
import CustomerIndex from "@/Pages/CustomerIndex.vue";

const app =createApp({
    components:{
        PostIndex,
        CustomerIndex
    }
});
app.use(Toaster).provide('toast', app.config.globalProperties.$toast);
app.use(router);
app.mount('#app');