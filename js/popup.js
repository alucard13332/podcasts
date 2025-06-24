$(document).ready(function() {
    $('.open_popup').on('click', function() {
        $('#popup').addClass('open');
    });
    $('#close_popup').on('click', function() {
        $('#popup').removeClass('open');
    });
});