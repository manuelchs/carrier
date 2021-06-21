$(function(){

    var animationTime = 300;
    $("#trailerSlider").css('width', ($('#trailerSlider .slider-item').length * 100) + '%' );
	  $("#trailerSlider .slider-item:last").insertBefore("#trailerSlider .slider-item:first");
	  $("#trailerSlider").css('margin-left','-'+100+'%');
  
	  $("#arrowRightTrailer").click(function(){
        moverD();
    });
  
    $("#arrowLeftTrailer").click(function(){
        moverI();
    });
  
	  function moverD() {
		$("#trailerSlider").animate({marginLeft:"-"+200+"%"},animationTime,function(){
			$("#trailerSlider .slider-item:first").insertAfter("#trailerSlider .slider-item:last");
			$("#trailerSlider").css("margin-left","-"+100+"%");
			if($("#trailerPoints .points-item.active").attr('div') == $('#trailerSlider .slider-item').length){
				$("#trailerPoints .points-item.active").removeClass("active");
				$("#trailerPoints .points-item.p1").addClass("active");
			}
			else{
				var posInitial = $("#trailerPoints .points-item.active").attr('div');
				$("#trailerPoints .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) + 1;
				$("#trailerPoints .points-item.p"+newPos).addClass("active");
			}
		});
	}
	
	function moverI() {
		$("#trailerSlider").animate({marginLeft: 0},animationTime,function(){
			$("#trailerSlider .slider-item:last").insertBefore("#trailerSlider .slider-item:first");
			$("#trailerSlider").css("margin-left","-"+100+"%");
			if($("#trailerPoints .points-item.active").attr('div') == 1){
				$("#trailerPoints .points-item.active").removeClass("active");
				var newPos = parseInt($('#trailerSlider .slider-item').length);
				$("#trailerPoints .points-item.p"+newPos).addClass("active");
			}
			else{
				var posInitial = $("#trailerPoints .points-item.active").attr('div');
				$("#trailerPoints .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) - 1;
				$("#trailerPoints .points-item.p"+newPos).addClass("active");
			}
		});
	}

	$("#trailerPoints .points-item").click(
		function(){
			var posInitial = $("#trailerPoints .points-item.active").attr('div');
			var posClicked = $(this).attr('div');
			activeVisiblePage(posClicked);

			if(posInitial == $('#trailerSlider .slider-item').length && posClicked == 1)
			{
				moverD();
			}
			else if(posClicked == $('#trailerSlider .slider-item').length && posInitial == 1){
				moverI();
			}
			else if (posClicked == posInitial-1){
				moverI();
			}
			else{
				$("#trailerPoints .points-item.active").removeClass("active");
				$(this).addClass("active");

				if ( posClicked > posInitial ) {
					$(document.getElementById('item' + posClicked)).insertAfter( $('#trailerSlider .slider-item')[1]);
					$("#trailerSlider").animate({marginLeft:"-"+200+"%"},animationTime,function() {
						ordenar(posClicked);
						$("#trailerSlider").css("margin-left","-"+100+"%");							
					});
				} else if ( posClicked < posInitial) {
					$("#trailerSlider").css("margin-left","-"+200+"%");				
					$(document.getElementById('item' + posClicked)).insertBefore( $('#trailerSlider .slider-item')[1]);
					$("#trailerSlider").animate({marginLeft: '-100%'},animationTime,function() {
						ordenar(posClicked);
						$("#trailerSlider").css("margin-left","-"+100+"%");							
					});
				}
			}
		}
	);

	function ordenar(pos = 1) {
		var x = 1;
		var els = new Array();
		var newPos;
		$('#trailerSlider .slider-item').each(function( i, e ) {
			if ( i == 0 ) {
				if ( pos - 1 == 0 ) {
					els.push( $("div[id='itemTrailer" + $('#trailerSlider .slider-item').length + "']")[0]);
				} else {										
					newPos =   parseInt(pos - 1);
					els.push( $("div[id='itemTrailer" + newPos + "']")[0]);
									
				}
			} else if ( i == 1 ) {
				els.push( $("div[id='itemTrailer" + pos + "']")[0]);
			} else if ( parseInt(pos) + parseInt(i) - 1 > $('#trailerSlider .slider-item').length ) {
				els.push( $("div[id='itemTrailer" + x + "']")[0]);											
				x++;								
			} else {
				newPos = parseInt(pos) + parseInt(i) - 1;
				els.push( $("div[id='itemTrailer" + newPos + "']")[0]);									
			}
		});
		$('#trailerSlider').html(els);
    }

});