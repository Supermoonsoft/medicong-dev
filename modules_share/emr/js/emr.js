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
$('.drug').click(function () {
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
$('.pacs').click(function () {
    $('#emr-modal')
            .modal('show')
            .find('#emrModalContent')
            .load($(this).attr('value'));
})



