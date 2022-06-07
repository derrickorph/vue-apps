require('./bootstrap');

import { createApp } from "vue";
import router from "./router";
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();
//  <!-- latest jquery-->
// import"../assets/js/jquery-3.2.1.min.js";
// // <!-- Bootstrap js-->
// import"../assets/js/bootstrap/popper.min.js";
// import"../assets/js/bootstrap/bootstrap.bundle.min.js";
// // <!-- feather icon js-->
// import"../assets/js/icons/feather-icon/feather.min.js";
// import"../assets/js/icons/feather-icon/feather-icon.js";
// // <!-- Sidebar jquery-->
// import"../assets/js/sidebar-menu.js";
// import"../assets/js/config.js";
// // <!-- Plugins JS start-->
// import"../assets/js/chart/chartist/chartist.js";
// import"../assets/js/chart/knob/knob.min.js";
// import"../assets/js/chart/knob/knob-chart.js";
// import"../assets/js/prism/prism.min.js";
// import"../assets/js/clipboard/clipboard.min.js";
// import"../assets/js/counter/jquery.waypoints.min.js";
// import"../assets/js/counter/jquery.counterup.min.js";
// import"../assets/js/counter/counter-custom.js";
// import"../assets/js/custom-card/custom-card.js";
// import"../assets/js/notify/bootstrap-notify.min.js";
// import"../assets/js/dashboard/default.js";
// import"../assets/js/notify/index.js";
// import"../assets/js/typeahead/handlebars.js";
// import"../assets/js/typeahead/typeahead.bundle.js";
// import"../assets/js/typeahead/typeahead.custom.js";
// import"../assets/js/chat-menu.js";
// import"../assets/js/height-equal.js";
// import"../assets/js/tooltip-init.js";
// import"../assets/js/typeahead-search/handlebars.js";
// import"../assets/js/typeahead-search/typeahead-custom.js";
// // <!-- Plugins JS Ends-->
// // <!-- Theme js-->
// import"../assets/js/script.js";
// import"../assets/js/theme-customizer/customizer.js";
// <!-- Plugin used-->
import PostIndex from "@/Pages/PostIndex.vue";
import CustomerIndex from "@/Pages/CustomerIndex.vue";

createApp({
    components:{
        PostIndex,
        CustomerIndex
    }
})
.use(router)
.mount('#app')