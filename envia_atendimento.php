<?php 

	
echo('<div class="pagina2">
		<div class="quebra"><span class="cxTit"><h1 class="tit">Central de Atendimento</h1></span></div>
		<br /><br /><br /><br /><br /><br /><br /><br />
	    <p class="corCinza" style="padding:10px;">Enviando formulário...</p></div>');


$nome = $_POST['nome'];
$assunto = "Contato Site RXT - " . $_POST['assunto'];
$area = $_POST['area'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$mensagem = nl2br($_POST['mensagem']);

//$receberCopia = $_POST['receberCopia'];

$ip=$_SERVER['REMOTE_ADDR'];
$dataCad=date("Y-m-d H:i:s");
$dataBr = date('d/m/Y H:m:s', strtotime($dataCad));
	
/*
include("captcha/securimage.php");
$img = new Securimage();
$valid = $img->check($_POST['code']);
	
if($valid != true) { 
	echo("Validando...");
	
	$_SESSION["msgErro"]='Os caracteres da imagem do código não foram preenchidos corretamente ou o tempo máximo para preenchimento foi ultrapassado.
						  <br /> Por favor, preencha o código da imagem novamente e clique em enviar.</strong>';
	
	echo("<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=atendimento.php'>");
} else { 
*/

if($nome=="" && $assunto=="Contato Site RXT - " && $area=="" && $telefone=="" && $email=="" && $cidade=="" && $uf=="" && $mensagem==""){
	echo("<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=atendimento.php?e=1'>");
	
} else {

	//################################################################################################################################### FORM DE CONTATO
	$emailsender = "admin@rxttravel.com.br";
	$destinatarioCopia = "carlos.alberto@rxttravel.com.br";
	
	if($area=="Reserva"){			$destinatario="diegops122@gmail.com"; 		$destinatarioCopia.="";} else 
	if($area=="Emissão Aérea"){		$destinatario="diegops122@gmail.com"; 		$destinatarioCopia.="";} else 
	if($area=="Operação Terrestre"){$destinatario="diegops122@gmail.com"; 	    $destinatarioCopia.="";} else 
	if($area=="Administrativo"){	$destinatario="diegops122@gmail.com";     $destinatarioCopia.="";} else 
	if($area=="Financeiro"){		$destinatario="diegops122@gmail.com"; 	$destinatarioCopia.="";} else 
	if($area=="Marketing"){			$destinatario="diegops122@gmail.com"; 		$destinatarioCopia.="";} else 
	if($area=="TI"){				$destinatario="diegops122@gmail.com"; 			$destinatarioCopia.="";} else {$destinatario="admin@rxttravel.com.br";}
	
	$destinatarioCopiaOculta="";

	//----------------------------------------------------------msg ini
	$corpo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    			<html xmlns="http://www.w3.org/1999/xhtml">
    			<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				</head>
				<body>
					<small style="color:#666;">' . $ip . ' &nbsp; | &nbsp; ' . $dataBr . '</small><br/><br/>
					<i>--- inicio da mensagem ---</i><br/><br/>
					<strong>Nome completo:</strong> ' . $nome . '<br /><br /> 
					<strong>Telefone:</strong> ' . $telefone . '<br /><br /> 
					<strong>E-mail:</strong> ' . $email . '<br /><br />
					<strong>Cidade:</strong> ' . $cidade . ' / ' . $uf . '<br /><br /> 
					<strong>&Aacute;rea de Interesse:</strong> ' . $area . '<br /><br />
					<strong>Mensagem:</strong><br /><br />' . $mensagem . '<br /><br />
					<i>--- fim da mensagem ---</i>
			  </body></html>';
	//----------------------------------------------------------msg fim
	//$corpo = utf8_decode($corpo); //DESCOMENTAR PARA OS ACENTOS FUNCIONAREM NO MOBIMAIL



	//##################################################################################################################################
	//DISPARANDO E-MAIL   -   INI
	//##################################################################################################################################
	
		$headers  = "MIME-Version: 1.1\n"; 
		$headers .= "Content-type: text/html; charset=utf-8\n"; //$headers .= "Content-type: text/html; charset=utf-8\r\n"; //sem suporte para acentos no outlook e webmail
		$headers .= "From: " . $emailsender . "\n"; // remetente
		$headers .= "Return-Path: " . $emailsender . "\r\n"; // mail precisa ser igual ao remetente
		$headers .= 'Cc: ' . $destinatarioCopia . "\n"; //cópia aberta
		$headers .= 'Bcc: ' . $destinatarioCopiaOculta . "\n"; //cópia oculta
		$headers .= "Reply-To: " . $email . "\n";
		
		
		if(!mail($destinatario, $assunto, $corpo, $headers ,"-r".$emailsender)){ // Se for Postfix
    		$headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
		    mail($destinatario, $assunto, $corpo, $headers );
		}
		
	//##################################################################################################################################
	//DISPARANDO E-MAIL   -   FIM
	//##################################################################################################################################
	
	echo("<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=atendimento.php?m=e'>");

}

//}
?>
    </div>
</div>

<?php rodape($pagina); ?>