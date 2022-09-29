const flashLogin = $('.flash-login').data('flashdata');

if(flashLogin){
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: flashLogin,
        showConfirmButton: false,
        timer: 1500
      });
}