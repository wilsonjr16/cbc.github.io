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



  jQuery("#owl-painel").owlCarousel({
      dots: false,
      nav: true,
      items : 1,
      autoplay: true,
      loop: true,
      lazyLoad:true,
      responsiveClass: true
  });
});
