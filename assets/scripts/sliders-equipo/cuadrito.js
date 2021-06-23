$(function() {
    const widthHelp = $('#help').width();
    const heightHelp = $('#help').height();
    var hammerHELP    = new Hammer(document.getElementById('help'));
    hammerHELP.get('swipe').set({ direction: Hammer.DIRECTION_ALL });
    hammerHELP.on('swipeup', function(){
        console.log('Swipe');
        $('#help').css('opacity', '0');
        $('#help').css('bottom', '100%');
	});

    hammerHELP.on('swipedown', function(){
        console.log('Swipe');
        $('#help').css('opacity', '0');
        $('#help').css('bottom', '-' + heightHelp + 'px');
	});
    
    hammerHELP.on('swipeleft', function(){
        $('#help').css('opacity', '0');
        $('#help').css('left', '-' + widthHelp + 'px');
    });
    
    hammerHELP.on('swiperight', function(){
        $('#help').css('opacity', '0');
        $('#help').css('left', '100%');
	});


    $('#closeHelp').click( function() {
        $('#help').css('opacity', '0');
        setTimeout( function() {
            $('#help').hide();
        },350);
    });

    $('#help').click( function() {
        if ( window.innerWidth < 1090 ) {
            window.open('https://api.whatsapp.com/send?phone=523334540499&text=Hola%2C%20%C2%BFPueden%20ayudarme%20a%20seleccionar%20un%20equipo%3F%20%E2%9D%84%EF%B8%8F', '_blank').focus();
        }
    });
});