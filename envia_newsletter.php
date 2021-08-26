<?php 


echo('<div class="pagina2">
		<div class="quebra"><span class="cxTit"><h1 class="tit">teste Form</h1></span></div>
		<br /><br /><br /><br /><br /><br /><br /><br />
	    <p class="corCinza" style="padding:10px;">Enviando formulário...</p></div>');


$newsQuem = $_POST['quem'];
$newsUf = $_POST['uf'];
$newsNome = $_POST['nome'];
$newsEmail = $_POST['email'];
	
$ip=$_SERVER['REMOTE_ADDR'];
$dataCad=date("Y-m-d H:i:s");
$dataBr = date('d/m/Y H:m:s', strtotime($dataCad));

//################################################################################################################################### FORM DE CONTATO
$destinatario="diegops122@gmail.com";
$destinatarioCopia="";
$destinatarioCopiaOculta="";
$emailsender = "diego_ps122@hotmail.com";
	
$assunto = "Cad. Newsletter RXT";

	//----------------------------------------------------------msg ini
	$corpo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    			<html xmlns="http://www.w3.org/1999/xhtml">
    			<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				</head>
				<body>
					<small style="color:#666;">' . $ip . ' &nbsp; | &nbsp; ' . $dataBr . '</small><br/><br/>
					<i>--- inicio da mensagem ---</i><br/><br/>
					<strong>Quem é?</strong> ' . $newsQuem . '<br /><br /> 
					<strong>Estado:</strong> ' . $newsUf . '<br /><br /> 
					<strong>Nome:</strong> ' . $newsNome . '<br /><br /> 
					<strong>E-mail:</strong> ' . $newsEmail . '<br /><br />
					<i>--- fim da mensagem ---</i>
			  </body></html>';
	//----------------------------------------------------------msg fim

	
	//##################################################################################################################################
	//DISPARANDO E-MAIL   -   INI
	//##################################################################################################################################
	/*
	if($newsQuem!="" && $newsUf!="" && $newsNome!="" && $newsEmail!=""){		
		
		$headers  = "MIME-Version: 1.1\n"; 
		$headers .= "Content-type: text/html; charset=utf-8\n";
		$headers .= "From: " . $destinatario . "\n"; // remetente
		$headers .= "Return-Path: " . $destinatario . "\n"; // mail precisa ser igual ao remetente
		$headers .= 'Cc: ' . $destinatarioCopia . "\n"; //cópia aberta
		$headers .= 'Bcc: ' . $destinatarioCopiaOculta . "\n"; //cópia oculta
		$headers .= "Reply-To: " . $newsEmail . "\n";
		
		if(!mail($destinatario, $assunto, $corpo, $headers ,"-r".$emailsender)){ // Se for Postfix
    		$headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
		    mail($destinatario, $assunto, $corpo, $headers );
		}
		
		echo("<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=atendimento.php'>");

	} else { echo("<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>"); }
	*/
	//##################################################################################################################################
	//DISPARANDO E-MAIL   -   FIM
	//##################################################################################################################################

?>