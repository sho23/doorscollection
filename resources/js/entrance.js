$(function(){
    var $suggestList = [];
    if (!$suggestList.length) {
        $('#suggest-name').hide();
        $('.form-check').hide();
        $('#name-input').show();
    }
    $('#name-text').on('click',function(){
        checked = $('#name-text:checked').val();
        if(checked) {
            $('#name-input').slideToggle();
        } else {
            $('#name-input').slideToggle();
        }
    });
});