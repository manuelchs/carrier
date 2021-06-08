$(function(){
    var animationTime = 300;
    $("#slider").css('width', ($('.slider-item').length * 100) + '%' );
	  $(".slider-item:last").insertBefore(".slider-item:first");
	  $("#slider").css('margin-left','-'+100+'%');
  
	  $("#arrowRight").click(function(){
        // alert("HOLA");
        moverD();
    });
  
    $("#arrowLeft").click(function(){
        moverI();
    });
  
	  function moverD() {
		$("#slider").animate({marginLeft:"-"+200+"%"},animationTime,function(){
			$(".slider-item:first").insertAfter(".slider-item:last");
			$("#slider").css("margin-left","-"+100+"%");
			if($(".points-item.active").attr('div') == $('.slider-item').length){
				$(".points-item.active").removeClass("active");
				$(".points-item.p1").addClass("active");
			}
			else{
				var posInitial = $(".points-item.active").attr('div');
				$(".points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) + 1;
				$(".points-item.p"+newPos).addClass("active");
			}

		});
	}
	
	function moverI() {
		$("#slider").animate({marginLeft: 0},animationTime,function(){
			$(".slider-item:last").insertBefore(".slider-item:first");
			$("#slider").css("margin-left","-"+100+"%");
			if($(".points-item.active").attr('div') == 1){
				$(".points-item.active").removeClass("active");
				var newPos = parseInt($('.slider-item').length);
				$(".points-item.p"+newPos).addClass("active");
			}
			else{
				var posInitial = $(".points-item.active").attr('div');
				$(".points-item.active").removeClass("active");
				var newPos = parseInt(posInitial) - 1;
				$(".points-item.p"+newPos).addClass("active");
			}
		});
	}
	$(".points-item").click(
		function(){
			var posInitial = $(".points-item.active").attr('div');
			var posClicked = $(this).attr('div');

			if(posInitial == $('.slider-item').length && posClicked == 1)
			{
				moverD();
			}
			else if(posClicked == $('.slider-item').length && posInitial == 1){
				moverI();
			}
			else if (posClicked == posInitial-1){
				moverI();
			}
			else{
				$(".points-item.active").removeClass("active");
				$(this).addClass("active");

				if ( posClicked > posInitial ) {
					$(document.getElementById('item' + posClicked)).insertAfter( $('.slider-item')[1]);
					$("#slider").animate({marginLeft:"-"+200+"%"},animationTime,function() {
						ordenar(posClicked);
						$("#slider").css("margin-left","-"+100+"%");							
					});
				} else if ( posClicked < posInitial) {
					$("#slider").css("margin-left","-"+200+"%");				
					$(document.getElementById('item' + posClicked)).insertBefore( $('.slider-item')[1]);
					$("#slider").animate({marginLeft: '-100%'},animationTime,function() {
						ordenar(posClicked);
						$("#slider").css("margin-left","-"+100+"%");							
					});
				}
			}
		}
	);

	function ordenar(pos) {
		var x = 1;
		var els = new Array();
		$('.slider-item').each(function( i, e ) {
			if ( i == 0 ) {
				if ( pos - 1 == 0 ) {
          console.log($("div[id='item" + $('.slider-item').length + "']")[0]);
					els.push( $("div[id='item" + $('.slider-item').length + "']")[0]);
				} else {										
					var newPos =   parseInt(pos - 1);
          console.log($("div[id='item" + newPos + "']")[0]);
					els.push( $("div[id='item" + newPos + "']")[0]);
									
				}
			} else if ( i == 1 ) {
				els.push( $("div[id='item" + pos + "']")[0]);
        console.log($("div[id='item" + pos + "']")[0]);
			} else if ( parseInt(pos) + parseInt(i) - 1 > $('.slider-item').length ) {
        console.log($("div[id='item" + x + "']")[0]);
				els.push( $("div[id='item" + x + "']")[0]);											
				x++;								
			} else {
				var newPos = parseInt(pos) + parseInt(i) - 1;
				console.log(newPos);
        console.log($("div[id='item" + newPos + "']")[0]);
				els.push( $("div[id='item" + newPos + "']")[0]);									
			}
		});
		console.log(els);
		$('#slider').html(els);
		
	}

});