<template>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <router-link :to="{name:'customer.index'}" class="nav-link active" aria-current="page">Clients</router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{name:'product.index'}" class="nav-link" >Produits</router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{name:'shopping.cart'}" class="nav-link" >
              <navbar-cart></navbar-cart>
          </router-link>

          
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</template>
<script>

  import NavbarCart from "@/Pages/components/NavbarCart.vue"

  export default {
    components: {
        NavbarCart,
    },
   
  }
</script>