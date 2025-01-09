import './bootstrap';
import '@fortawesome/fontawesome-free/css/all.min.css';
// Jadinya pakai CDN dari Swal. Sudah install via npm but still wont work. Idk why.
// import Swal from 'sweetalert2';
// window.swal = Swal;

// document.addEventListener('DOMContentLoaded', function() {
//     // Register
//     document.getElementById('registButton').addEventListener('click', function(event) {
//         event.preventDefault();

//         document.querySelector('form').submit();

//         Swal.fire({
//             icon: "success",
//             title: "Added Successfully",
//             showConfirmButton: false,
//             timer: 1000
//         });
//     });

//     // Update
//     document.getElementById('updateButton').addEventListener('click', function(event) {
//         event.preventDefault();
//         console.log('Button clicked', this);
//         const mhsId = this.getAttribute('data-id');
            
//             Swal.fire({
//                 title: "Update with this new record of mahasiswa " + mhsId + " ?",
//                 icon: "warning",
//                 showCancelButton: true,
//                 confirmButtonColor: "#3085d6",
//                 cancelButtonColor: "#d33",
//                 confirmButtonText: "Yes, I want to update!"
//             }).then((result) => {
//                 if (result.isConfirmed) {
//                     document.querySelector('form').submit();
//                     Swal.fire({
//                         title: "Record mahasiswa " + mhsId + " updated successfully",
//                         icon: "success",
//                         showConfirmButton: false,
//                         timer: 1000
//                     });
//                 }
//             });
//     });

//     // Delete
//     document.querySelectorAll('.deleteButton').forEach(function(button) {
//         button.addEventListener('click', function(event) {
//             event.preventDefault();

//             const deleteHref = this.getAttribute('href');
//             const mhsId = this.getAttribute('data-id');
            
//             Swal.fire({
//                 title: "Delete mahasiswa " + mhsId + " ?",
//                 text: "You won't be able to revert this!",
//                 icon: "warning",
//                 showCancelButton: true,
//                 confirmButtonColor: "#3085d6",
//                 cancelButtonColor: "#d33",
//                 confirmButtonText: "Yes, delete it!"
//             }).then((result) => {
//                 if (result.isConfirmed) {
//                     window.location.href = deleteHref;
//                     Swal.fire({
//                         title: "Mahasiswa " + mhsId + " deleted successfully",
//                         icon: "success",
//                         showConfirmButton: false,
//                         timer: 1000
//                     });
//                 }
//             });
//         });
//     });
// });