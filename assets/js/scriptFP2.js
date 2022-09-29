const flashData = $('.flash-data').data('flashdata');

if(flashData){
    Swal.fire({
        title: flashData,
        text: '',
        icon: 'success',
        confirmButtonColor: '#1d5770;',
        confirmButtonText: '好的'
    });
}