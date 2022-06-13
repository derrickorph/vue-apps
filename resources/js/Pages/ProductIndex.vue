<template>
    <app-layout title="Dashboard">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Remove py-8 -->
                <div class="mx-auto   py-8">
                    <div class="grid grid-cols-4 gap-4 mx-2">
                        <template v-for="(product) in allProducts" :key="product.id" >
                         
                            <div tabindex="0" class="focus:outline-none mx-2 w-72">
                                <div class="px-3">
                                    <img alt="person capturing an image" :src="'images/'+product.image" tabindex="0" class="focus:outline-none w-full  h-44" />
                                </div>
                                <div class="bg-white">
                                    <div class="flex items-center justify-between px-4 pt-4">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                            </svg>
                                        </div>
                                        <div class="bg-yellow-200 py-1.5 px-6 rounded-full bg-warning">
                                            <p tabindex="0" class="focus:outline-none text-xs text-yellow-700" v-text="product.formatted_price"></p>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center">
                                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold" v-text="product.name"></h2>
                                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5"></p>
                                        </div>
                                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2" v-text="product.description"></p>
                                        <add-to-cart :product-id="product.id"></add-to-cart>
                                    </div>
                                </div>
                            </div>
                            
                        </template>
                    </div>

                </div>
            </div>
        </div>
                    
    </app-layout>
</template>
<script>
    import { onMounted } from 'vue';
    import AppLayout from "@/Pages/Layouts/AppLayout.vue"
    import AddToCart from "@/Pages/components/AddToCart.vue"
    import useProduct from '@/Services/products';

    export default ({
        components: {
            AppLayout,
            AddToCart,
        },
        setup() {
            const {getListProducts,allProducts}= useProduct();

            onMounted(getListProducts());

            return {
                allProducts,
            }
        }
        
    });
</script>
