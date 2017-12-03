<?php 
	
	if (isset( $_POST["User"] )) {

		$name    = $_POST["User"]["name"];
		$mail    = $_POST["User"]["mail"];

		// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
		// O return-path deve ser ser o mesmo e-mail do remetente.

		$headers = "MIME-Version: 1.1\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
		$headers .= "From: Site CBC Consultoria <contato@consultoriacbc.com.br>\n"; // remetente
		$headers .= "Return-Path: CBC Consultoria <contato@consultoriacbc.com.br>\n"; // return-path
			
		$msg = "Nome: ".$name."\n"."E-mail: ".$mail;

		$enviar = mail("isabela.wdev@gmail.com","Assunto: Dados para download do e-book | Site consultoriacbc.com.br",$msg, $headers);
        $enviarEmailAlternativo = mail("isabelatsilveira@gmail.com","Assunto: Dados para download do e-book | Site consultoriacbc.com.br",$msg, $headers);

		echo "sucesso";

	}else {

		echo "error";

	}	


?>