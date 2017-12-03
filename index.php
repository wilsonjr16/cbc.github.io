<?php
  $classBody ="page-home";
  $classHeader ="header";
  $cabecalho_title = "Página Inicial | CBC Consultoria";
  $og_title = "Consultoria Estratégica, Financeira e o Inovador Método Mude!";
  include("header.php");
?>

    <div class="clear"></div>

    <section class="fleft_full section_nv2">
      <div class="center_element cf">
        <div class="col-md-10 col-md-offset-1 section_nv2-box">
          <div class="box_middle">
            <h2 class="section_nv2-tit">Transformando ideias em resultados</h2>
            <p class="section_nv2-txt">Criando soluções adequadas com objetivo de gerar crescimento e avaliando o impacto dessas inovações nos resultados da empresa.</p>
            <ul class="bts_modal">
              <li id="modal1" class="fleft"><a href="javascript:void(0)" title="Assistir vídeo" class="btn_modal-video">Assistir vídeo</a></li>
              <li id="modal2" class="fleft"><a href="javascript:void(0)" title="Receber e-book" class="btn_modal-ebook">Receber e-book</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <div class="clear"></div>

    <div class="fleft_full modal_video">
        <div class="modal_video-box">
        <div class="modal-close"></div>
            <div class="col-sm-5 modal_box-textos">
                <h2 class="modal_box-tit">Transformando<br/> ideias em <strong class="modal_box-destaque">resultados</strong></h2>
                <p class="modal_box-txt">
                    O nosso formato de consultoria abrange essas duas áreas que estão totalmente interligadas em uma organização: estratégia e finanças. Criando soluções adequadas com objetivo de gerar crescimento e avaliando o impacto dessas inovações nos resultados da empresa. 
                </p>
            </div>

            <div class="col-sm-6 col-sm-offset-1 modal_box-video">
                <div class="video_box">
                    <iframe class="video_home" id="video" src="https://www.youtube.com/embed/CxTPXJc17Pg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>					
            </div>

        </div>
    </div>

    <div class="clear"></div>

    <div class="fleft_full modal_ebook">
        <div class="modal_ebook-box">
        <div class="modal-close"></div>
        <div class="flex_box form_box">
            <figure class="col-sm-5"><img src="img/mude.png" alt="método mude" class="img-responsive mude_img" /></figure>
            <div class="col-sm-6 col-xs-12 form_ebook">
                <form id="ebook" class="ebook">
                    <h3 class="form_tit">Inscreva-se e receba <strong class="form_tit-destaque">nosso ebook</strong></h3>
                    <input type="text" class="nome" name="nome" id="nome_ebook" placeholder="Seu nome" required="required">
                    <input type="email" class="email" name="email" id="email_ebook" placeholder="Seu email" required="required">
                    <input type="submit" class="btn_form fright submit" value="ENVIAR">
                </form>
                
                <div class="ebook_download">
                  <h3 class="ebook_title">Baixe gratuitamente o nosso Ebook Oficial!</h3>
                  <a href="http://www.consultoriacbc.com.br/ebook_oficial.pdf" download="ebook_oficial.pdf" target="_blank" class="ebook_bt" title="Download do E-book Oficial">Download</a>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="clear"></div>

    <section class="fleft_full frase">
      <div class="center_element cf">
        <div class="col-md-10 col-md-offset-1">
          <p class="frase_txt">"Atualmente só existem dois tipos de empresas: As que inovam e crescem e aquelas que saem do mercado mesmo sem perceber. A excelência há muito tempo deixou de ser opção." Júnior Costa</p>
        </div>
      </div>
    </section> 

    <div class="clear"></div>

    <section class="fleft_full section_nv3">
    <div class="center_element cf">
    <h3 class="section_nv3-tit">Conheça nossos serviços</h3>
      <ul class="servicos_list row">
        <li class="servicos_list-item col-sm-4">
          <a href="consultoria-estrategica.html" class="servicos_list-link">
              <img class="img-responsive servicos_list-img" src="img/icon-1.png">
              <p class="servicos_list-txt">Consultoria Estratégica</p>
          </a>
        </li>

        <li class="servicos_list-item col-sm-4">
          <a href="consultoria-financeira.html" class="servicos_list-link">
              <img class="img-responsive servicos_list-img" src="img/icon-2.png">
              <p class="servicos_list-txt">Consultoria Financeira</p>
          </a>
        </li>

        <li class="servicos_list-item col-sm-4">
          <a href="metodo-mude.html" class="servicos_list-link">
              <img class="img-responsive servicos_list-img" src="img/icon-3.png">
              <p class="servicos_list-txt">Método Mude</p>
          </a>
        </li>
      </ul>
    </div>
    </section>

    <div class="clear"></div>

    <section class="fleft_full section_nv4">
        <div class="center_element">
          <h3 class="insta_tit">Instagram @consultoriacbc</h3>
          <ul id="instafeed" class="row"></ul>
        </div>
    </section>

    <div class="clear"></div>
    
<?php
  include("footer.php");
?>