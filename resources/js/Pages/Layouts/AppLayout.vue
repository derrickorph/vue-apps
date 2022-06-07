<template>
    
    <!-- Loader starts-->
    <!-- <div class="loader-wrapper">
        <div class="loader bg-white">
            <div class="whirly-loader"> </div>
        </div>
    </div> -->
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <!-- Page Header Start-->
      <Header/>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <Sidebar/>

        
        <!-- Page Sidebar Ends-->
        
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col">
                  <div class="page-header-left">
                    <h3>Default</h3>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Dashboard</li>
                      <li class="breadcrumb-item active">Default</li>
                    </ol>
                  </div>
                </div>
                <!-- Bookmark Start-->
                <div class="col">
                  <div class="bookmark pull-right">
                    <ul>
                      <li><a href="#" data-bs-toggle="tooltip" title="Calender" data-bs-original-title="Calendar"><i data-feather="calendar"></i></a></li>
                      <li><a href="#" data-bs-toggle="tooltip" title="Mail" data-bs-original-title="Mail"><i data-feather="mail"></i></a></li>
                      <li><a href="#" data-bs-toggle="tooltip" title="Chat" data-bs-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Bookmark Ends-->
              </div>
            </div>
          </div>
    

          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-8 xl-100 set-col-12">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="chart-widget-dashboard">
                          <div class="media">
                            <div class="media-body">
                              <h5 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">5789</span></h5>
                              <p>Total Visits</p>
                            </div><i data-feather="tag"></i>
                          </div>
                          <div class="dashboard-chart-container">
                            <div class="small-chart-gradient-1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="chart-widget-dashboard">
                          <div class="media">
                            <div class="media-body">
                              <h5 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">4986</span></h5>
                              <p>Total Sale</p>
                            </div><i data-feather="shopping-cart"></i>
                          </div>
                          <div class="dashboard-chart-container">
                            <div class="small-chart-gradient-2"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="chart-widget-dashboard">
                          <div class="media">
                            <div class="media-body">
                              <h5 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">8568</span></h5>
                              <p>Total Value</p>
                            </div><i data-feather="sun"></i>
                          </div>
                          <div class="dashboard-chart-container">
                            <div class="small-chart-gradient-3"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
             
             
            </div>
          </div>
          <slot></slot>

          <!-- Container-fluid Ends-->
        </div>
        
        <Footer/>
      </div>
    </div>
        
    
</template>

<script>

import Sidebar from '@/Pages/Partials/Sidebar.vue'
import Footer from '@/Pages/Partials/Footer.vue'
import Header from '@/Pages/Partials/Header.vue'

// import * as feather from 'feather-icons';

export default {
 props: {
    title: String,
  },
  components: {
    
    Sidebar,
    Footer,
    Header,
  },

}
</script>
