$(function(){

    var animationTime = 300;
    $("#velocidadSlider").css('width', ($('#velocidadSlider .slider-item').length * 100) + '%' );
	  $("#velocidadSlider .slider-item:last").insertBefore("#velocidadSlider .slider-item:first");
	  $("#velocidadSlider").css('margin-left','-'+100+'%');
  
	  $("#arrowRightVelocidad").click(function(){
        moverD();
    });
  
    $("#arrowLeftVelocidad").click(function(){
        moverI();
    });
  
	  function moverD() {
		$("#velocidadSlider").animate({marginLeft:"-"+200+"%"},animationTime,function(){
			$("#velocidadSlider .slider-item:first").insertAfter("#velocidadSlider .slider-item:last");
			$("#velocidadSlider").css("margin-left","-"+100+"%");
			if($("#velocidadPoints .points-item.active").attr('div') == $('#velocidadSlider .slider-item').length){
				$("#velocidadPoints .points-item.active").removeClass("active");
				$("#velocidadPoints .points-item.p1").addClass("active");
			}
			else{
				var posInitial = $("#velocidadPoints .points-item.active").attr('div');
				$("#velocidadPoints .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) + 1;
				$("#velocidadPoints .points-item.p"+newPos).addClass("active");
			}
		});
	}
	
	function moverI() {
		$("#velocidadSlider").animate({marginLeft: 0},animationTime,function(){
			$("#velocidadSlider .slider-item:last").insertBefore("#velocidadSlider .slider-item:first");
			$("#velocidadSlider").css("margin-left","-"+100+"%");
			if($("#velocidadPoints .points-item.active").attr('div') == 1){
				$("#velocidadPoints .points-item.active").removeClass("active");
				var newPos = parseInt($('#velocidadSlider .slider-item').length);
				$("#velocidadPoints .points-item.p"+newPos).addClass("active");
			}
			else{
				var posInitial = $("#velocidadPoints .points-item.active").attr('div');
				$("#velocidadPoints .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) - 1;
				$("#velocidadPoints .points-item.p"+newPos).addClass("active");
			}
		});
	}

	$("#velocidadPoints .points-item").click(
		function(){
			var posInitial = $("#velocidadPoints .points-item.active").attr('div');
			var posClicked = $(this).attr('div');
			activeVisiblePage(posClicked);

			if(posInitial == $('#velocidadSlider .slider-item').length && posClicked == 1)
			{
				moverD();
			}
			else if(posClicked == $('#velocidadSlider .slider-item').length && posInitial == 1){
				moverI();
			}
			else if (posClicked == posInitial-1){
				moverI();
			}
			else{
				$("#velocidadPoints .points-item.active").removeClass("active");
				$(this).addClass("active");

				if ( posClicked > posInitial ) {
					$(document.getElementById('item' + posClicked)).insertAfter( $('#velocidadSlider .slider-item')[1]);
					$("#velocidadSlider").animate({marginLeft:"-"+200+"%"},animationTime,function() {
						ordenar(posClicked);
						$("#velocidadSlider").css("margin-left","-"+100+"%");							
					});
				} else if ( posClicked < posInitial) {
					$("#velocidadSlider").css("margin-left","-"+200+"%");				
					$(document.getElementById('item' + posClicked)).insertBefore( $('#velocidadSlider .slider-item')[1]);
					$("#velocidadSlider").animate({marginLeft: '-100%'},animationTime,function() {
						ordenar(posClicked);
						$("#velocidadSlider").css("margin-left","-"+100+"%");							
					});
				}
			}
		}
	);

	function ordenar(pos = 1) {
		var x = 1;
		var els = new Array();
		var newPos;
		$('#velocidadSlider .slider-item').each(function( i, e ) {
			if ( i == 0 ) {
				if ( pos - 1 == 0 ) {
					els.push( $("div[id='itemVelocidad" + $('#velocidadSlider .slider-item').length + "']")[0]);
				} else {										
					newPos =   parseInt(pos - 1);
					els.push( $("div[id='itemVelocidad" + newPos + "']")[0]);
									
				}
			} else if ( i == 1 ) {
				els.push( $("div[id='itemVelocidad" + pos + "']")[0]);
			} else if ( parseInt(pos) + parseInt(i) - 1 > $('#velocidadSlider .slider-item').length ) {
				els.push( $("div[id='itemVelocidad" + x + "']")[0]);											
				x++;								
			} else {
				newPos = parseInt(pos) + parseInt(i) - 1;
				els.push( $("div[id='itemVelocidad" + newPos + "']")[0]);									
			}
		});
		$('#velocidadSlider').html(els);
    }

});