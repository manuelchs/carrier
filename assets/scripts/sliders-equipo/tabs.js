$( function() {
    $('.tab').click( function() {
        $('.tab.active').removeClass('active');
        $(this).addClass('active');
        $('.tab-info').hide();
        $('#' + $(this).attr('tab')).show();
    })
});