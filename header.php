<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?php print $cabecalho_title; ?></title>
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400|Poppins" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#6fb1c3" />

    <!-- favicon -->
    <link rel="icon" href="img/favicon/favicon.png" />
    <link rel="apple-touch-icon" href="img/favicon/apple-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57"   href="img/favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72"   href="img/favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png" />
    
    <meta property="og:url" content="www.consultoriacbc.com.br" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php print $og_title; ?>" />
    <meta property="og:description" content="Acreditamos que para planejar e pensar estrategicamente é necessário um trabalho que harmonize persistência, tempo para desenvolvimento do seu estilo estratégico e capacidade inspiradora. Se você está disposto a desafiar o seu modelo mental sabendo que rotas novas em mapas antigos pouco podem agregar o convidamos para fazer parte do nosso ciclo de clientes e parceiros." />
    <meta property="og:image" content="http://www.consultoriacbc.com.br/img/facebook_cover.png" />

</head>

<body class="body <?php print $classBody; ?>">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	
<header class="<?php print $classHeader;?> fleft_full">
<div class="center_element">
  <nav class="header_nav flex_box">
    <h1 class="logo_cbc">
        <a href="index.php" class="logo_link" title="logo home"><img src="img/logo.png" class="img-responsive" /></a>
    </h1>
    <ul class="header_menu flex_box">
        <li class="header_menu-item">
            <a href="index.php" class="header_menu-link transition">HOME</a>
        </li>

        <li class="header_menu-item">
            <a href="javascript:void(0)" class="header_menu-link transition">INSTITUCIONAL</a>
            <ul class="submenu">
                <li class="submenu-item"><a href="sobre.php" class="submenu-link">SOBRE</a></li>
                <li class="submenu-item"><a href="nossa-historia.php" class="submenu-link">NOSSA HISTÓRIA</a></li>
                <li class="submenu-item"><a href="equipe.php" class="submenu-link">EQUIPE</a></li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a href="javascript:void(0)" class="header_menu-link transition">CONSULTORIA</a>
            <ul class="submenu">
                <li class="submenu-item"><a href="consultoria-estrategica.php" class="submenu-link">Consultoria Estratégica</a></li>
                <li class="submenu-item"><a href="consultoria-financeira.php" class="submenu-link">Consultoria Financeira</a></li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a href="metodo-mude.php" class="header_menu-link transition">MÉTODO MUDE</a>
        </li>

        <li class="header_menu-item">
            <a href="clientes.php" class="header_menu-link transition">CLIENTES</a>
        </li>

        <li class="header_menu-item">
            <a href="contato.php" class="header_menu-link transition">CONTATO</a>
        </li>
    </ul>
  </nav>
</div>
</header>

<header class="header_mobile fleft_full">

    <div class="hamburguer">
        <div class="hamburguer_item first"></div>
        <div class="hamburguer_item middle"></div>
        <div class="hamburguer_item last"></div>
    </div>

    <h1 class="logo_mobile">
        <a class="logo_mobile-link" href="index.php">
            <img src="img/logo.png" alt="imagem da logo" class="img_logo-mobile img-responsive center-block"/>
        </a>
    </h1>

    <div class="nav_mobile_wrapper">

      <div class="nav_mobile_col fleft">

        <h1 class="logo_mobile">
            <a class="logo_mobile-link" href="index.php">
                <img src="img/logo.png" alt="imagem da logo" class="img_logo-mobile img-responsive center-block"/>
            </a>
        </h1>

        <div class="menu_close"></div>

        <div class="borda-divisao"></div>

        <nav class="header_mobile-nav">

          <ul class="header_menu">
              <li class="header_menu-item"><a href="index.php" class="header_menu-link">HOME</a></li>

              <li class="header_menu-item"><a href="sobre.php" class="header_menu-link">SOBRE</a></li>

              <li class="header_menu-item"><a href="nossa-historia.php" class="header_menu-link">NOSSA HISTÓRIA</a></li>

              <li class="header_menu-item"><a href="consultoria-estrategica.php" class="header_menu-link">CONSULTORIA ESTRATÉGICA</a></li>

              <li class="header_menu-item"><a href="consultoria-financeira.php" class="header_menu-link">CONSULTORIA FINANCEIRA</a></li>

              <li class="header_menu-item"><a href="metodo-mude.php" class="header_menu-link">MÉTODO MUDE</a></li>

              <li class="header_menu-item"><a href="equipe.php" class="header_menu-link">EQUIPE</a></li>

              <li class="header_menu-item"><a href="clientes.php" class="header_menu-link">CLIENTES</a></li>

              <li class="header_menu-item"><a href="contato.php" class="header_menu-link">CONTATO</a></li>
          </ul>

        </nav>

        </div>

    </div>

</header>