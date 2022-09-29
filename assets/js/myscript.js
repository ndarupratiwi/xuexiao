const flashData = $('.flash-data').data('flashdata');

if(flashData){
    Swal.fire({
        title: '数据'+flashData+'成功!',
        text: '',
        icon: 'success',
        confirmButtonColor: '#1d5770',
        confirmButtonText: '好的'
    });
}

//Buttom Delete
$('.btnDelete').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: '您确定要删除此数据吗?',
        text: "您将无法还原此内容！",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: '取消',
        confirmButtonColor: '#1d5770',
        cancelButtonColor: '#d33',
        confirmButtonText: '是的，删除它！'
      }).then((result) => {
        if (result.value) {
          document.location.href = href;
        }
      })
});