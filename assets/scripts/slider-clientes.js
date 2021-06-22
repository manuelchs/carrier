$(function () {
	var animationTime = 300;

	var hammer    = new Hammer(document.getElementById('sliderClientes'));
    hammer.on('swipeleft', function(){
		moverD();
    });
    
    hammer.on('swiperight', function(){
		moverI();
	});


	$("#sliderClientes").css('width', ($('#sliderClientes .slider-item').length * 100) + '%');
	$("#sliderClientes .slider-item:last").insertBefore("#sliderClientes .slider-item:first");
	$("#sliderClientes").css('margin-left', '-' + 100 + '%');

	function moverD() {
		$("#sliderClientes").animate({ marginLeft: "-" + 200 + "%" }, animationTime, function () {
			$("#sliderClientes .slider-item:first").insertAfter("#sliderClientes .slider-item:last");
			$("#sliderClientes").css("margin-left", "-" + 100 + "%");
			if ($("#pointsClientes .points-item.active").attr('div') == $('#sliderClientes .slider-item').length) {
				$("#pointsClientes .points-item.active").removeClass("active");
				$("#pointsClientes .points-item.p1").addClass("active");
			}
			else {
				var posInitial = $("#pointsClientes .points-item.active").attr('div');
				$("#pointsClientes .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) + 1;
				$("#pointsClientes .points-item.p" + newPos).addClass("active");
			}
		});
	}

	function moverI() {
		$("#sliderClientes").animate({ marginLeft: 0 }, animationTime, function () {
			$("#sliderClientes .slider-item:last").insertBefore("#sliderClientes .slider-item:first");
			$("#sliderClientes").css("margin-left", "-" + 100 + "%");
			if ($("#pointsClientes .points-item.active").attr('div') == 1) {
				$("#pointsClientes .points-item.active").removeClass("active");
				var newPos = parseInt($('#sliderClientes .slider-item').length);
				$("#pointsClientes .points-item.p" + newPos).addClass("active");
			}
			else {
				var posInitial = $("#pointsClientes .points-item.active").attr('div');
				$("#pointsClientes .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) - 1;
				$("#pointsClientes .points-item.p" + newPos).addClass("active");
			}
		});
	}

	$("#pointsClientes .points-item").click(
		function () {
			var posInitial = $("#pointsClientes .points-item.active").attr('div');
			var posClicked = $(this).attr('div');
			if (posInitial == $('#sliderClientes .slider-item').length && posClicked == 1) {
				moverD();
			}
			else if (posClicked == $('#sliderClientes .slider-item').length && posInitial == 1) {
				moverI();
			}
			else if (posClicked == posInitial - 1) {
				moverI();
			}
			else {
				$("#pointsClientes .points-item.active").removeClass("active");
				$(this).addClass("active");

				if (posClicked > posInitial) {
					$(document.getElementById('itemClientes' + posClicked)).insertAfter($('#sliderClientes .slider-item')[1]);
					$("#sliderClientes").animate({ marginLeft: "-" + 200 + "%" }, animationTime, function () {
						ordenar(posClicked);
						$("#sliderClientes").css("margin-left", "-" + 100 + "%");
					});
				} else if (posClicked < posInitial) {
					$("#sliderClientes").css("margin-left", "-" + 200 + "%");
					$(document.getElementById('itemClientes' + posClicked)).insertBefore($('#sliderClientes .slider-item')[1]);
					$("#sliderClientes").animate({ marginLeft: '-100%' }, animationTime, function () {
						ordenar(posClicked);
						$("#sliderClientes").css("margin-left", "-" + 100 + "%");
					});
				}
			}
		}
	);

	function ordenar(pos = 1) {
		var x = 1;
		var els = new Array();
		var newPos;
		$('#sliderClientes .slider-item').each(function (i, e) {
			if (i == 0) {
				if (pos - 1 == 0) {
					els.push($("div[id='item" + $('#sliderClientes .slider-item').length + "']")[0]);
				} else {
					newPos = parseInt(pos - 1);
					els.push($("div[id='item" + newPos + "']")[0]);

				}
			} else if (i == 1) {
				els.push($("div[id='item" + pos + "']")[0]);
			} else if (parseInt(pos) + parseInt(i) - 1 > $('#sliderClientes .slider-item').length) {
				els.push($("div[id='item" + x + "']")[0]);
				x++;
			} else {
				newPos = parseInt(pos) + parseInt(i) - 1;
				els.push($("div[id='item" + newPos + "']")[0]);
			}
		});
		$('#sliderClientes').html(els);
	}

});