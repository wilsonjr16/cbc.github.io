<?php
  $classBody ="page-contato";
  $classHeader ="header_pages";
  $cabecalho_title = "Entre em contato | CBC Consultoria";
  $og_title = "Entre em contato conosco para mais informações";
  include("header.php");
?>
	
<div class="clear"></div>

<section class="fleft_full section_contato">
    <div class="container">
    <div class="col-sm-6">

    <h3 class="page-contato_tit">Entre em contato conosco</h3>
    <form id="contato" class="form_contact">
        <p class="contato_campos">
            <label  for="nome">Nome:</label>
            <input type="text" name="nome" placeholder="Digite aqui o seu nome" id="inputName" aria-describedby="nameHelp" required="required" >
        </p>

        <p class="contato_campos">
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="exemplo@email.com" id="inputEmail" aria-describedby="emailHelp" required="required">
        </p>

        <p class="contato_campos">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" class="telefone" placeholder="(00) 0000-0000" id="inputTel" aria-describedby="telHelp" required="required">
        </p>

        <p class="contato_campos">
            <label for="msg">Mensagem:</label>
            <textarea  name="mensagem" placeholder="Deixe aqui sua mensagem" id="inputMensagem" required="required"></textarea>
        </p>

        <p class="error_text"></p>

<!--        <p class="sucess_text">asdasd</p>-->

        <input type="submit" class="btn_form enviar" value="ENVIAR">

    </form> 

    </div>

    <div class="col-sm-6">
        <figure class="img_contato-box">
            <img src="img/img-contato.png" alt="imagem-contato" class="img_contato img-responsive"/>
        </figure>
    </div>
    </div><!-- container -->
</section>    

<div class="clear"></div>  

<section class="fleft_full section_nv4">
    <div class="container">
      <h3 class="insta_tit">Instagram @consultoriacbc</h3>
      <ul id="instafeed" class="row"></ul>
    </div>
</section>

<div class="clear"></div>
<?php
  include("footer.php");
?>