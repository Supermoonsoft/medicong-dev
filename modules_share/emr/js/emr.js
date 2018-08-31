$('.lab').click(function () {
    $('#emr-modal')
            .modal('show')
            .find('#emrModalContent')
            .load($(this).attr('value'));
})

$('.visit').click(function () {
    $('#emr-modal')
            .modal('show')
            .find('#emrModalContent')
            .load($(this).attr('value'));
})

$('.med').click(function () {
    $('#emr-modal')
            .modal('show')
            .find('#emrModalContent')
            .load($(this).attr('value'));
})

$('.doc').click(function () {
    $('#emr-modal')
            .modal('show')
            .find('#emrModalContent')
            .load($(this).attr('value'));
})

$('.pac').click(function () {
    $('#emr-modal')
            .modal('show')
            .find('#emrModalContent')
            .load($(this).attr('value'));
})