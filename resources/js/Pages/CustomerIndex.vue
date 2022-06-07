<template>
    <app-layout title="Dashboard">
        <div class="card mt-1 mb-2">
            <div class="card-body">
                <router-link :to="{name:'customer.create'}" class="btn btn-success btn-sm float-end">Ajouter un client</router-link>

            </div>
        </div>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Telephone</th>
                    <th>Favourite</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <template v-for="(customer,index) in customers" :key="customer.id" :index="index">
                    <tr>
                        <td v-text="index+1"></td>
                        <td v-text="customer.name"></td>
                        <td v-text="customer.tel"></td>
                        <td >
                            <span class="badge"  v-bind:class="customer.is_favourite?'bg-success':'bg-danger'" v-text="customer.is_favourite">

                            </span>
                        </td>
                        <td>
                            <router-link :to="{name:'customer.edit',params:{id:customer.id}}" class="btn btn-success btn-sm me-2">Editer</router-link>
                            <button type="button" @click="deleteCustomer(customer.id)"   class="btn btn-danger btn-sm">Supprimer</button>
                        </td>
                        
                    </tr>
            </template>
                                
            </tbody>
        </table>
    </app-layout>
</template>
<script>
    import { onMounted } from 'vue';
    import AppLayout from "@/Pages/Layouts/AppLayout.vue"
    import useCustomers from '@/Services/customerService.js';

    export default ({
        components: {
            AppLayout,
        },
        setup() {
            const {customers,getCustomers,destroyCustomer}= useCustomers();

            onMounted(getCustomers());

            const deleteCustomer =async (id)=>{
                await destroyCustomer(id);
            };

            return {
                customers,
                deleteCustomer
            }
        }
        
    });
</script>
