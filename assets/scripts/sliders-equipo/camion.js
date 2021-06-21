$(function(){

    var animationTime = 300;
    $("#camionSlider").css('width', ($('#camionSlider .slider-item').length * 100) + '%' );
	  $("#camionSlider .slider-item:last").insertBefore("#camionSlider .slider-item:first");
	  $("#camionSlider").css('margin-left','-'+100+'%');
  
	  $("#arrowRightCamion").click(function(){
        moverD();
    });
  
    $("#arrowLeftCamion").click(function(){
        moverI();
    });
  
	  function moverD() {
		$("#camionSlider").animate({marginLeft:"-"+200+"%"},animationTime,function(){
			$("#camionSlider .slider-item:first").insertAfter("#camionSlider .slider-item:last");
			$("#camionSlider").css("margin-left","-"+100+"%");
			if($("#camionPoints .points-item.active").attr('div') == $('#camionSlider .slider-item').length){
				$("#camionPoints .points-item.active").removeClass("active");
				$("#camionPoints .points-item.p1").addClass("active");
			}
			else{
				var posInitial = $("#camionPoints .points-item.active").attr('div');
				$("#camionPoints .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) + 1;
				$("#camionPoints .points-item.p"+newPos).addClass("active");
			}
		});
	}
	
	function moverI() {
		$("#camionSlider").animate({marginLeft: 0},animationTime,function(){
			$("#camionSlider .slider-item:last").insertBefore("#camionSlider .slider-item:first");
			$("#camionSlider").css("margin-left","-"+100+"%");
			if($("#camionPoints .points-item.active").attr('div') == 1){
				$("#camionPoints .points-item.active").removeClass("active");
				var newPos = parseInt($('#camionSlider .slider-item').length);
				$("#camionPoints .points-item.p"+newPos).addClass("active");
			}
			else{
				var posInitial = $("#camionPoints .points-item.active").attr('div');
				$("#camionPoints .points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) - 1;
				$("#camionPoints .points-item.p"+newPos).addClass("active");
			}
		});
	}

	$("#camionPoints .points-item").click(
		function(){
			var posInitial = $("#camionPoints .points-item.active").attr('div');
			var posClicked = $(this).attr('div');
			activeVisiblePage(posClicked);

			if(posInitial == $('#camionSlider .slider-item').length && posClicked == 1)
			{
				moverD();
			}
			else if(posClicked == $('#camionSlider .slider-item').length && posInitial == 1){
				moverI();
			}
			else if (posClicked == posInitial-1){
				moverI();
			}
			else{
				$("#camionPoints .points-item.active").removeClass("active");
				$(this).addClass("active");

				if ( posClicked > posInitial ) {
					$(document.getElementById('item' + posClicked)).insertAfter( $('#camionSlider .slider-item')[1]);
					$("#camionSlider").animate({marginLeft:"-"+200+"%"},animationTime,function() {
						ordenar(posClicked);
						$("#camionSlider").css("margin-left","-"+100+"%");							
					});
				} else if ( posClicked < posInitial) {
					$("#camionSlider").css("margin-left","-"+200+"%");				
					$(document.getElementById('item' + posClicked)).insertBefore( $('#camionSlider .slider-item')[1]);
					$("#camionSlider").animate({marginLeft: '-100%'},animationTime,function() {
						ordenar(posClicked);
						$("#camionSlider").css("margin-left","-"+100+"%");							
					});
				}
			}
		}
	);

	function ordenar(pos = 1) {
		var x = 1;
		var els = new Array();
		var newPos;
		$('#camionSlider .slider-item').each(function( i, e ) {
			if ( i == 0 ) {
				if ( pos - 1 == 0 ) {
					els.push( $("div[id='itemCamion" + $('#camionSlider .slider-item').length + "']")[0]);
				} else {										
					newPos =   parseInt(pos - 1);
					els.push( $("div[id='itemCamion" + newPos + "']")[0]);
									
				}
			} else if ( i == 1 ) {
				els.push( $("div[id='itemCamion" + pos + "']")[0]);
			} else if ( parseInt(pos) + parseInt(i) - 1 > $('#camionSlider .slider-item').length ) {
				els.push( $("div[id='itemCamion" + x + "']")[0]);											
				x++;								
			} else {
				newPos = parseInt(pos) + parseInt(i) - 1;
				els.push( $("div[id='itemCamion" + newPos + "']")[0]);									
			}
		});
		$('#camionSlider').html(els);
    }

});