$(function () {

	var pointsClicked = false;
	const lastPosition = $('#slider .slider-item').length;
	var currentPosition = 1;

	var animationTime = 300;

	var autoAnimation;

    // autoAnimate();

	// activeVisiblePage(currentPosition);

	var hammer    = new Hammer(document.getElementById('slider'));
    hammer.on('swipeleft', function(){
        clearInterval(autoAnimation);
		moverD();
		setTimeout(function() {
			autoAnimate();
		}, 3000);
    });
    
    hammer.on('swiperight', function(){
        clearInterval(autoAnimation);
		moverI();
		setTimeout(function() {
			autoAnimate();
		}, 3000);
	});


	$("#slider").css('width', ($('#slider .slider-item').length * 100) + '%');
	$("#slider .slider-item:last").insertBefore("#slider .slider-item:first");
	$("#slider").css('margin-left', '-' + 100 + '%');

	$("#arrowRight").click(function () {
		moverD();
	});

	$("#arrowLeft").click(function () {
		moverI();
	});

	function moverD() {
		if ( !pointsClicked ) {
			currentPosition = currentPosition < lastPosition ? currentPosition + 1 : currentPosition;
		} else {
			pointsClicked = false;
		}
		// activeVisiblePage(currentPosition);
		$("#slider").animate({ marginLeft: "-" + 200 + "%" }, animationTime, function () {
			$("#slider .slider-item:first").insertAfter("#slider .slider-item:last");
			$("#slider").css("margin-left", "-" + 100 + "%");
			if ($("#points .points-item.active").attr('div') == $('#slider .slider-item').length) {
				$("#points .points-item.active").removeClass("active");
				$("#points .points-item.p1").addClass("active");
			}
			else {
				var posInitial = $("#points .points-item.active").attr('div');
				$("#points .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) + 1;
				$("#points .points-item.p" + newPos).addClass("active");
			}
		});
	}

	function moverI() {
		if ( !pointsClicked ) {
			currentPosition = currentPosition > 1 ? currentPosition - 1 : currentPosition;
		} else {
			pointsClicked = false;
		}
		// activeVisiblePage(currentPosition);
		$("#slider").animate({ marginLeft: 0 }, animationTime, function () {
			$("#slider .slider-item:last").insertBefore("#slider .slider-item:first");
			$("#slider").css("margin-left", "-" + 100 + "%");
			if ($("#points .points-item.active").attr('div') == 1) {
				$("#points .points-item.active").removeClass("active");
				var newPos = parseInt($('#slider .slider-item').length);
				$("#points .points-item.p" + newPos).addClass("active");
			}
			else {
				var posInitial = $("#points .points-item.active").attr('div');
				$("#points .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) - 1;
				$("#points .points-item.p" + newPos).addClass("active");
			}
		});
	}

	$("#points .points-item").click(
		function () {
			clearInterval(autoAnimation);
			pointsClicked = true;
			var posInitial = $("#points .points-item.active").attr('div');
			var posClicked = $(this).attr('div');
			currentPosition = posClicked;
			if (posInitial == $('#slider .slider-item').length && posClicked == 1) {
				moverD();
			}
			else if (posClicked == $('#slider .slider-item').length && posInitial == 1) {
				moverI();
			}
			else if (posClicked == posInitial - 1) {
				moverI();
			}
			else {
				// activeVisiblePage(currentPosition);
				$("#points .points-item.active").removeClass("active");
				$(this).addClass("active");

				if (posClicked > posInitial) {
					$(document.getElementById('item' + posClicked)).insertAfter($('#slider .slider-item')[1]);
					$("#slider").animate({ marginLeft: "-" + 200 + "%" }, animationTime, function () {
						ordenar(posClicked);
						$("#slider").css("margin-left", "-" + 100 + "%");
					});
				} else if (posClicked < posInitial) {
					$("#slider").css("margin-left", "-" + 200 + "%");
					$(document.getElementById('item' + posClicked)).insertBefore($('#slider .slider-item')[1]);
					$("#slider").animate({ marginLeft: '-100%' }, animationTime, function () {
						ordenar(posClicked);
						$("#slider").css("margin-left", "-" + 100 + "%");
					});
				}
			}
			setTimeout(function() {
				autoAnimate();
			}, 3000 );
		}
	);

	function activeVisiblePage(pos) {
		$('#item' + pos + ' .slider-item-animation').removeClass('slider-item-animation-end');
		setTimeout(function () {
			$('#item' + pos + ' .slider-item-animation').addClass('slider-item-animation-end');
		}, 320);
	}

	function ordenar(pos = 1) {
		var x = 1;
		var els = new Array();
		var newPos;
		$('#slider .slider-item').each(function (i, e) {
			if (i == 0) {
				if (pos - 1 == 0) {
					els.push($("div[id='item" + $('#slider .slider-item').length + "']")[0]);
				} else {
					newPos = parseInt(pos - 1);
					els.push($("div[id='item" + newPos + "']")[0]);

				}
			} else if (i == 1) {
				els.push($("div[id='item" + pos + "']")[0]);
			} else if (parseInt(pos) + parseInt(i) - 1 > $('#slider .slider-item').length) {
				els.push($("div[id='item" + x + "']")[0]);
				x++;
			} else {
				newPos = parseInt(pos) + parseInt(i) - 1;
				els.push($("div[id='item" + newPos + "']")[0]);
			}
		});
		$('#slider').html(els);
	}

	function autoAnimate() {
		autoAnimation = setInterval(function() {
			// moverD();
		}, 7000);
	}

});