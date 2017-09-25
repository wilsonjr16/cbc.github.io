jQuery(document).ready( function(){
		
	jQuery('.hamburguer').click(function(){
	jQuery('.mobile_header, .nav_mobile_wrapper').addClass('active');
	jQuery('.blackout2').fadeIn();
	jQuery('body').addClass('scroll-hidden');
	});

	jQuery('.menu_close').click(function(){
		jQuery('.mobile_header, .nav_mobile_wrapper').removeClass('active');
		jQuery('.blackout2').fadeOut();
		jQuery('body').removeClass('scroll-hidden');
	});

	var html = $('html');

	// triggers to open and close menu mobile
	$('.trigger-menu, .menu-mobile-backdrop').click(function(){
	   html.addClass('menu-open'); 
	});

	$('.menu-mobile-backdrop,.backdrop-icon').click(function(){
	   html.removeClass('menu-open'); 
	});

	// cart support class
	if($('.caixa-cupom').length){
		$('.caixa-cupom').parents('tr').addClass('cupom-wrapper');
	}

	if($('#calculoFrete').length){
		$('#calculoFrete').parents('tr').addClass('frete-wrapper');
	}
              
    
    });