//$('#modalAddRoom').addClass('in');

$('#btn_add_room').click(function (){
    $('#modalAddRoom').modal('show').find('#modalAddRoomContent').load($(this).attr('value'))
});


$('.table td').click(function(){
    //alert('ddd');
});

