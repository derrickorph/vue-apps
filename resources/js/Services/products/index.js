import { ref } from "vue";
import axios from 'axios';

export default function useProduct() {
    
    const allProducts = ref([]);

    const getListProducts = async () => {
        let response = await axios.get('/api/products');
        allProducts.value = response.data.products;

    };


    return {
      
        getListProducts,
        allProducts,
        
    }
}