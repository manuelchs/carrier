$(function(){

    var autoAnimation;

    autoAnimate();

    var hammerDos    = new Hammer(document.getElementById('sliderDos'));
    hammerDos.on('swipeleft', function(){
        clearInterval(autoAnimation);
		moverD();
		setTimeout(function() {
			autoAnimate();
		}, 3000);
    });
    
    hammerDos.on('swiperight', function(){
        clearInterval(autoAnimation);
		moverI();
		setTimeout(function() {
			autoAnimate();
		}, 3000);
	});

    var animationTime = 300;
    $("#sliderDos").css('width', ($('#sliderDos .slider-item').length * 100) + '%' );
	  $("#sliderDos .slider-item:last").insertBefore("#sliderDos .slider-item:first");
	  $("#sliderDos").css('margin-left','-'+100+'%');
  
	  $("#arrowRight").click(function(){
        moverD();
    });
  
    $("#arrowLeft").click(function(){
        moverI();
    });
  
	  function moverD() {
		$("#sliderDos").animate({marginLeft:"-"+200+"%"},animationTime,function(){
			$("#sliderDos .slider-item:first").insertAfter("#sliderDos .slider-item:last");
			$("#sliderDos").css("margin-left","-"+100+"%");
			if($("#pointsDos .points-item.active").attr('div') == $('#sliderDos .slider-item').length){
				$("#pointsDos .points-item.active").removeClass("active");
				$("#pointsDos .points-item.p1").addClass("active");
			}
			else{
				var posInitial = $("#pointsDos .points-item.active").attr('div');
				$("#pointsDos .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) + 1;
				$("#pointsDos .points-item.p"+newPos).addClass("active");
			}
		});
	}
	
	function moverI() {
		$("#sliderDos").animate({marginLeft: 0},animationTime,function(){
			$("#sliderDos .slider-item:last").insertBefore("#sliderDos .slider-item:first");
			$("#sliderDos").css("margin-left","-"+100+"%");
			if($("#pointsDos .points-item.active").attr('div') == 1){
				$("#pointsDos .points-item.active").removeClass("active");
				var newPos = parseInt($('#sliderDos .slider-item').length);
				$("#pointsDos .points-item.p"+newPos).addClass("active");
			}
			else{
				var posInitial = $("#pointsDos .points-item.active").attr('div');
				$("#pointsDos .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) - 1;
				$("#pointsDos .points-item.p"+newPos).addClass("active");
			}
		});
	}

	$("#pointsDos .points-item").click(
		function(){
			var posInitial = $("#pointsDos .points-item.active").attr('div');
			var posClicked = $(this).attr('div');
			activeVisiblePage(posClicked);

			if(posInitial == $('#sliderDos .slider-item').length && posClicked == 1)
			{
				moverD();
			}
			else if(posClicked == $('#sliderDos .slider-item').length && posInitial == 1){
				moverI();
			}
			else if (posClicked == posInitial-1){
				moverI();
			}
			else{
				$("#pointsDos .points-item.active").removeClass("active");
				$(this).addClass("active");

				if ( posClicked > posInitial ) {
					$(document.getElementById('item' + posClicked)).insertAfter( $('#sliderDos .slider-item')[1]);
					$("#sliderDos").animate({marginLeft:"-"+200+"%"},animationTime,function() {
						ordenar(posClicked);
						$("#sliderDos").css("margin-left","-"+100+"%");							
					});
				} else if ( posClicked < posInitial) {
					$("#sliderDos").css("margin-left","-"+200+"%");				
					$(document.getElementById('item' + posClicked)).insertBefore( $('#sliderDos .slider-item')[1]);
					$("#sliderDos").animate({marginLeft: '-100%'},animationTime,function() {
						ordenar(posClicked);
						$("#sliderDos").css("margin-left","-"+100+"%");							
					});
				}
			}
		}
	);

	function ordenar(pos = 1) {
		var x = 1;
		var els = new Array();
		var newPos;
		$('#sliderDos .slider-item').each(function( i, e ) {
			if ( i == 0 ) {
				if ( pos - 1 == 0 ) {
					els.push( $("div[id='itemDos" + $('#sliderDos .slider-item').length + "']")[0]);
				} else {										
					newPos =   parseInt(pos - 1);
					els.push( $("div[id='itemDos" + newPos + "']")[0]);
									
				}
			} else if ( i == 1 ) {
				els.push( $("div[id='itemDos" + pos + "']")[0]);
			} else if ( parseInt(pos) + parseInt(i) - 1 > $('#sliderDos .slider-item').length ) {
				els.push( $("div[id='itemDos" + x + "']")[0]);											
				x++;								
			} else {
				newPos = parseInt(pos) + parseInt(i) - 1;
				els.push( $("div[id='itemDos" + newPos + "']")[0]);									
			}
		});
		$('#sliderDos').html(els);
    }
    
    function autoAnimate() {
		autoAnimation = setInterval(function() {
			moverD();
		}, 5000);
	}

});