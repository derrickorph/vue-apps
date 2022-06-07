require('../bootstrap');
// import Swal from 'sweetalert2'

export default class Helpers{
  // displayToast = (type ='success', msg,title=null,toastr=true) => {
  //   const Toast = Swal.mixin({
  //     toast: true,
  //     position: 'top-end',
  //     showConfirmButton: false,
  //     timer: 3000,
  //     timerProgressBar: true,
  //     didOpen: (toast) => {
  //       toast.addEventListener('mouseenter', Swal.stopTimer)
  //       toast.addEventListener('mouseleave', Swal.resumeTimer)
  //     }
  //   })
  //   if (toastr) {
  //     Toast.fire({icon: `${type == 'success' ? 'success' : 'error'}`,title: `${msg}`})
  //   } else {
  //     Swal.fire(`${title}`, `${msg}`, `${type}`)
  //   }
    
  // }
  // getAllForModal = (url) => {
  //   axios.get(url).then(response => {
  //       return response.data;
  //     })
  //     .catch(error => {
  //       return error.data.errors
  //     })
  // }
  // table=()=>{
  //   this.$nextTick(() => {
  //     $('#datatable').DataTable({
  //       lengthChange: true,

  //       language: {
  //         url: "https://cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json",
  //       },

  //     });
  //   });
  // }
  // store = (url, data) => {
  //   axios.post(url, data)
  //     .then(response => {
        
  //       this.displayToast('success', 'Enregistrement effectué', true);

  //     })
  //     .error(error => {
  //       this.displayToast("error", 'Une erreur est survenue',true);
  //       return error.data.errors
  //     })
  // }

  // update = (url, data, id) => {
  //   axios.patch(url + id, data)
  //     .then(response => {
  //       this.displayToast("success", 'message');
  //     })
  //     .error(error => {
  //       displayToast("error", 'message');
  //       return error.data.errors
  //     })
  // }

  // destroy = (url, id) => {
  //   axios.delete(url + id)
  //     .then(response => {
  //       this.displayToast("success", 'message');
  //     })
  //     .error(error => {
  //       this.displayToast("error", 'message');
  //       return error.data.errors
  //     })
  // }
}



