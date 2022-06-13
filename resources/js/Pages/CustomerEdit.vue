<template>
    <app-layout title="Dashboard">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-3">
                <div class="card" >
                    <div class="card-header">
                        <h5 >Modifier un client</h5>

                    </div>
                    <div class="card-body">
                        <form @submit.prevent="saveCustomer">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom du client</label>
                                <input type="text" class="form-control" id="name"  v-model="customer.name">
                                <span v-if="errors.name" class="text-danger fs-6" v-text="errors.name[0]"></span>
                            </div>
                            <div class="mb-3">
                                <label for="tel" class="form-label">Tel. du client</label>
                                <input type="tel" class="form-control" id="tel" v-model="customer.tel">
                                <span v-if="errors.tel" class="text-danger fs-6" v-text="errors.tel[0]"></span>

                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="is_favourite" v-model="customer.is_favourite">
                                
                                <label class="form-check-label" for="is_favourite" >Favoris</label>
                                <span v-if="errors.is_favourite" class="d-block text-danger fs-6" v-text="errors.is_favourite[0]"></span>

                            </div>

                            <button type="submit" class="btn  btn-primary btn-sm">Mettre à jour</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>

</template>
<script>
    import useCustomers from '@/Services/customerService.js';
    import { onMounted } from 'vue';
    import AppLayout from "@/Pages/Layouts/AppLayout.vue"


    export default ({
        components: {
            AppLayout,
        },
        props:{
           id:{
               required:true,
                type:String,
           }

        },
        setup(props) {

            const {getCustomer,customer,updateCustomer,errors}=useCustomers();

            onMounted(getCustomer(props.id));

            const saveCustomer=async () => {
                await updateCustomer(props.id);
            };

            return {
                saveCustomer,
                customer,
                errors
            }
        }
        
    });
</script>
