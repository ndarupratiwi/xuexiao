const flashData = $('.flash-data').data('flashdata');

//Password
if(flashData){
    Swal.fire({
        title: flashData,
        text: '',
        icon: 'warning',
        confirmButtonColor: '#1d5770',
        confirmButtonText: '好的'
    });
}
