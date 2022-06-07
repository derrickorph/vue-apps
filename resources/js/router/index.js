import { createRouter,createWebHistory } from 'vue-router';

import PostIndex from "@/Pages/PostIndex.vue";
import CustomerIndex from "@/Pages/CustomerIndex.vue";
import CustomerCreate from "@/Pages/CustomerCreate.vue";
import CustomerEdit from "@/Pages/CustomerEdit.vue";
const routes=[
    {
        path:'/post',
        name:'post.index',
        component:PostIndex
    },
    {
        path:'/dashboard',
        name:'customer.index',
        component:CustomerIndex
    },
    {
        path:'/customers/create',
        name:'customer.create',
        component: CustomerCreate
    },
    {
        path:'/customers/:id/edit',
        name:'customer.edit',
        component: CustomerEdit,
        props:true
    }
]
export default createRouter({
    history:createWebHistory(),
    routes
})