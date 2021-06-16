$(document).ready( function() {
    animateScroll();

    $('#barsButtonMobile').click(function() {
        $('#barsMenuMobile').toggleClass('opened');
    });

    $('#footer h6').click( function() {
        // console.log($(this).parent().children('.links'));
        $(this).parent().find('.links').toggle(100);
    });

});

function animateScroll() {
    const elements = document.querySelectorAll('.custom-animation');
    for (let index = 0; index < elements.length; index++) {
        const element = elements[index];
        const elementPosition = element.getBoundingClientRect();
        const elementCenter = elementPosition.height;
        if (elementPosition.top < window.innerHeight - elementPosition.height + elementCenter && elementPosition.top > (elementPosition.height - 20) * -1) {
            if (!element.classList.contains('custom-animation-end')) {
                element.classList.add('custom-animation-end');
                if ( element.classList.contains('counter-animation') ) {
                    animateCounter(element);
                }
            }
        } else {
            element.classList.remove('custom-animation-end');
            if ( element.classList.contains('counter-animation') ) {
                resetCounters(element);
            }
        }
    }
}

function scrollToID(id, isNavbar = true) {
    var event = new Event(event);
    event.preventDefault();
    if ( id === 'home' ) {
        if( window.location.pathname === '/' || window.location.pathname === '/index.php' ) {
            $('html, body').animate({ scrollTop: 0 }, 700);
        } else {
            window.location.href = '/';
        }
    } else {
        if ( isNavbar ) {
            if( window.location.pathname === '/' || window.location.pathname === '/index.php' ) {
                if ($('#mainNav').hasClass('mobile-opened')) {
                    $('#mainNav').removeClass('mobile-opened');
                }
                $('html, body').animate({ scrollTop: $(id).offset().top - 80 }, 700);
                setTimeout( function() {
                    animateScroll();
                }, 1000 );
            } else {
                window.location.href = '/' + id;
            }
        } else {
            $('html, body').animate({ scrollTop: $(id).offset().top - 80 }, 700);
            setTimeout( function() {
                animateScroll();
            }, 1000 );
        }
    }
}

function animateCounter(e) {
    console.log(e);
    console.log($(e).attr('counter'));

    var durationAnimation = 2000;
    var iteration = parseInt(durationAnimation / $(e).attr('counter'));

    var animation = setInterval(function() {
        console.log('Animating');
        if (parseInt($(e).html()) < parseInt($(e).attr('counter'))) {
            $(e).html(parseInt($(e).html()) + 2);
        } else {
            $(e).html($(e).attr('counter'))
            clearInterval(animation);
        }
    }, iteration);
}

function resetCounters() {
    $('.counter-animation').html(0);
}