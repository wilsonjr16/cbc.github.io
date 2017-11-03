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

 var e=new Instafeed({
template:'<li class="col-sm-2 insta_item"><a href="{{link}}" title="Instagram" class="insta-link"><img src="{{image}}" class="img-responsive center-block"></a></li>',
get:"user",
userId:3281923690,
accessToken:"3281923690.7c61f5a.cec3aaea1a054ffda79af80434bd5963",
limit:6,
resolution:"low_resolution"});
e.run();

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


function open_modal() {
    jQuery('.btn_modal-video').click(function(){

		jQuery('.modal_video').show();
		
		jQuery('.video_box').append('<iframe class="video_home" id="video" src="https://www.youtube.com/embed/CxTPXJc17Pg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>');

	});
	
	jQuery('.modal-close, .modal_video').click(function(){

			jQuery('.modal_video').hide();
			
			jQuery('#video').detach();

	});
	
	jQuery('.btn_modal-ebook').click(function(){

		jQuery('.modal_ebook').show();
		
	});
	
	jQuery('.modal-close').click(function(){

			jQuery('.modal_ebook').hide();


	});
}

jQuery( document ).ready(function() {
    open_modal();
});
