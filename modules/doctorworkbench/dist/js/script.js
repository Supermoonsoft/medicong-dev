// ======>  บันทึกข้อมูล 
$('body').on('beforeSubmit', 'form', function () {
var form = $(this);
    if (form.find('.has-error').length) {
         return false;
    }
    $.ajax({
         url: form.attr('action'),
         type: 'post',
         data: form.serialize(),
         success: function (response) {
            $.pjax.reload({container: response.forceReload});
            $(response.forceReload).on('pjax:complete', function() {
                $('.clear').val(null).trigger('change');
                $('.fires').val(null).select2('open');
                totalPrice($('#cid').val());
               $(form)[0].reset();
             })

         }
    });
    return false;
});


// รวมราคาค่ายา
function totalPrice(cid){
    $.ajax({
      type: "get",
      url: "index.php?r=doctorworkbench/pcc-medication/sum-price",
      data:{cid:cid},
      dataType: "json",
      success: function (response) {
          const formatter = new Intl.NumberFormat('th', {
           // style: 'currency',
           // currency: 'USD',
            minimumFractionDigits: 2
          })
          $('#totalprice').html(formatter.format(response));
      }
  });
  }