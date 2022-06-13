<template>
    
    <!-- Loader starts-->
    <!-- <div class="loader-wrapper">
        <div class="loader bg-white">
            <div class="whirly-loader"> </div>
        </div>
    </div> -->
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="container-fluid">
      <!-- Page Header Start-->
      <Header/>
      <slot></slot>

    </div>
        
    
</template>

<script>

import Header from '@/Pages/Partials/Header.vue'

// import * as feather from 'feather-icons';

export default {
 props: {
    title: String,
  },
  components: {
    
    Header,
  },

}
</script>
