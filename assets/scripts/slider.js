$(function(){

    var animationTime = 300;
    $("#slider").css('width', ($('#slider .slider-item').length * 100) + '%' );
	  $("#slider .slider-item:last").insertBefore("#slider .slider-item:first");
	  $("#slider").css('margin-left','-'+100+'%');
  
	  $("#arrowRight").click(function(){
        moverD();
    });
  
    $("#arrowLeft").click(function(){
        moverI();
    });
  
	  function moverD() {
		activeVisiblePage();
		$("#slider").animate({marginLeft:"-"+200+"%"},animationTime,function(){
			$("#slider .slider-item:first").insertAfter("#slider .slider-item:last");
			$("#slider").css("margin-left","-"+100+"%");
			if($("#points .points-item.active").attr('div') == $('#slider .slider-item').length){
				$("#points .points-item.active").removeClass("active");
				$("#points .points-item.p1").addClass("active");
			}
			else{
				var posInitial = $("#points .points-item.active").attr('div');
				$("#points .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) + 1;
				$("#points .points-item.p"+newPos).addClass("active");
			}
		});
	}
	
	function moverI() {
		activeVisiblePage();
		$("#slider").animate({marginLeft: 0},animationTime,function(){
			$("#slider .slider-item:last").insertBefore("#slider .slider-item:first");
			$("#slider").css("margin-left","-"+100+"%");
			if($("#points .points-item.active").attr('div') == 1){
				$("#points .points-item.active").removeClass("active");
				var newPos = parseInt($('#slider .slider-item').length);
				$("#points .points-item.p"+newPos).addClass("active");
			}
			else{
				var posInitial = $("#points .points-item.active").attr('div');
				$("#points .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) - 1;
				$("#points .points-item.p"+newPos).addClass("active");
			}
		});
	}

	$("#points .points-item").click(
		function(){
			var posInitial = $("#points .points-item.active").attr('div');
			var posClicked = $(this).attr('div');
			activeVisiblePage(posClicked);

			if(posInitial == $('#slider .slider-item').length && posClicked == 1)
			{
				moverD();
			}
			else if(posClicked == $('#slider .slider-item').length && posInitial == 1){
				moverI();
			}
			else if (posClicked == posInitial-1){
				moverI();
			}
			else{
				$("#points .points-item.active").removeClass("active");
				$(this).addClass("active");

				if ( posClicked > posInitial ) {
					$(document.getElementById('item' + posClicked)).insertAfter( $('#slider .slider-item')[1]);
					$("#slider").animate({marginLeft:"-"+200+"%"},animationTime,function() {
						ordenar(posClicked);
						$("#slider").css("margin-left","-"+100+"%");							
					});
				} else if ( posClicked < posInitial) {
					$("#slider").css("margin-left","-"+200+"%");				
					$(document.getElementById('item' + posClicked)).insertBefore( $('#slider .slider-item')[1]);
					$("#slider").animate({marginLeft: '-100%'},animationTime,function() {
						ordenar(posClicked);
						$("#slider").css("margin-left","-"+100+"%");							
					});
				}
			}
		}
	);

	function activeVisiblePage(pos) {
		$('#item' + pos + ' .custom-animation').removeClass('custom-animation-end');
		setTimeout( function() {
			$('#item' + pos + ' .custom-animation').addClass('custom-animation-end');
		}, 340 );
	}

	function ordenar(pos = 1) {
		var x = 1;
		var els = new Array();
		var newPos;
		$('#slider .slider-item').each(function( i, e ) {
			if ( i == 0 ) {
				if ( pos - 1 == 0 ) {
					els.push( $("div[id='item" + $('#slider .slider-item').length + "']")[0]);
				} else {										
					newPos =   parseInt(pos - 1);
					els.push( $("div[id='item" + newPos + "']")[0]);
									
				}
			} else if ( i == 1 ) {
				els.push( $("div[id='item" + pos + "']")[0]);
			} else if ( parseInt(pos) + parseInt(i) - 1 > $('#slider .slider-item').length ) {
				els.push( $("div[id='item" + x + "']")[0]);											
				x++;								
			} else {
				newPos = parseInt(pos) + parseInt(i) - 1;
				els.push( $("div[id='item" + newPos + "']")[0]);									
			}
		});
		$('#slider').html(els);
	}

});