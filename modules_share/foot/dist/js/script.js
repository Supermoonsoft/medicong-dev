$('#save').click(function(){
    var form = $('#form');
    if ($('#requester').val() =="") {
                alert("requester ต้องไม่ว่าง");
                $('#requester').focus();
                return false;
            } else {
            // submit form
            SaveData();
            alert('บันทึกสำเร็จ');         
        }
});
// $('input').iCheck('disable');
$('input').on('ifUnchecked', function(event){SaveData();});
$('input').on('ifChecked', function(event){SaveData();});

function SaveData(){
    var form = $('#form');
    $.ajax({
            url    : form.attr('action'),
            type   : 'post',
            data   : form.serialize(),
            success: function (data) 
            {
                console.log(JSON.stringify(data.data));
            },
            error  : function () {
                console.log('internal server error');
            }
            });
            return false;
}