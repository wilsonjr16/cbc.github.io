function open_modal() {
    jQuery('.btn_modal-video').click(function(){
        jQuery('body').addClass('hideMobile');
		jQuery('.modal_video').show();
		
		jQuery('.video_box').append('<iframe class="video_home" id="video" src="https://www.youtube.com/embed/CxTPXJc17Pg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>');

	});
	
	jQuery('.modal-close, .modal_video').click(function(){
            jQuery('body').removeClass('hideMobile');
			jQuery('.modal_video').hide();
			
			jQuery('#video').detach();

	});
	
	jQuery('.btn_modal-ebook').click(function(){
        jQuery('body').addClass('hideMobile');
		jQuery('.modal_ebook').show();
		
	});
	
	jQuery('.modal-close').click(function(){
            jQuery('body').removeClass('hideMobile');
			jQuery('.modal_ebook').hide();


	});
}

jQuery( document ).ready(function() {
  open_modal();
  jQuery('.ebook_download').hide();
});


function call_ajax_withCallback(_url, _data, callback){

  jQuery.ajax({
      type: "POST",
      url: _url,
      data: _data,
      async: true,
      success: callback,
    error: callback
  });

} /* call_ajax_withCallback */


jQuery('.enviar').click(function(){

    var name    = $('#inputName');
    var mail    = $('#inputEmail');
    var tel    = $('#inputTel');
    var msg     = $('#inputMensagem');

    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    if( $.trim( name.val() ) == "" ){

        name.addClass('error');
        $('.error_text').text('preencha seu nome').slideDown();        

        return false;

    }

    if ( !emailReg.test( $.trim( mail.val() ) ) || $.trim( mail.val() ) == "" ){

        mail.addClass('error');
        $('.error_text').text('preencha seu email corretamente').slideDown();        

        return false;

    }

    if( $.trim( msg.val() ) == "" ){

        msg.addClass('error');
        $('.error_text').text('preencha sua mensagem').slideDown();        

        return false;

    }


    var User = {};

    User.name    = name.val();
    User.mail    = mail.val();
    User.tel    = tel.val();
    User.mensage = msg.val();

    call_ajax_withCallback('./mail.php', {'User' : User}, function(data){

        if( data.indexOf('sucesso') > -1 ){
          alert('Parabéns! Seu e-mail foi enviado com sucesso.'); 
          name.val('');
          mail.val('');
          tel.val('');
          msg.val('');
        }else {
          alert('Houve um problema com o envio. Tente novamente mais tarde.');  
        }

    });


    return false;

});

jQuery('.submit').click(function(){

    var name    = $('#nome_ebook');
    var mail    = $('#email_ebook');

    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    if( $.trim( name.val() ) == "" ){

        name.addClass('error');
        $('.error_text').text('preencha seu nome').slideDown();        

        return false;

    }

    if ( !emailReg.test( $.trim( mail.val() ) ) || $.trim( mail.val() ) == "" ){

        mail.addClass('error');
        $('.error_text').text('preencha seu email corretamente').slideDown();        

        return false;

    }

    var User = {};

    User.name    = name.val();
    User.mail    = mail.val();

    call_ajax_withCallback('./mail-ebook.php', {'User' : User}, function(data){

        if( data.indexOf('sucesso') > -1 ){
          alert('Parabéns! Seu e-mail foi adicionado com sucesso.'); 
          name.val('');
          mail.val('');
          jQuery('.ebook_download').show();
          
        }else {
          alert('Houve um problema com o envio. Tente novamente mais tarde.');  
          jQuery('.ebook_download').hide();
        }

    });


    return false;

});

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
  
  var e=new Instafeed({
    template:'<li class="col-sm-2 col-xs-6 insta_item"><a href="{{link}}" title="Instagram" class="insta-link"><img src="{{image}}" class="img-responsive center-block"></a></li>',
    get:"user",
    userId:3281923690,
    accessToken:"3281923690.7c61f5a.cec3aaea1a054ffda79af80434bd5963",
    limit:6,
    resolution:"low_resolution"});
    e.run();                     
});