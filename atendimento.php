<?php

?>

<div class="pagina2">
	<div class="quebra" style="background:url(imgs/tit-ico-contato.png) right top no-repeat;"><span class="cxTit"><h1 class="tit">Contate-nos</h1></span></div>
	<br /><br />
	<br /><br />
    <!-- links formularios
    <a href="documentacao.php"><div class="alinC itemAtendimento">DOCUMENTOS</div></a>
    <a href="formularios.php"><div class="alinC itemAtendimento">FORMULÁRIOS</div></a>
    <a href="formaspagamento.php"><div class="alinC itemAtendimento">PAGAMENTOS</div></a>
    -->
    <div class="quebra">&nbsp;</div>
    <br />
    <!--
    <p class="corCinza tam16" style="line-height:20px; padding:10px;">
    	Pensando em seu conforto, a RXT Travel Operadora disponibiliza sua central de atendimento para você acessar documentos e formulários para preparar e organizar as suas viagens.
        <br /><br />
        Você também poderá esclarecer suas dúvidas, solicitar mais informações e sugerir através do fale conosco, escolhendo o assunto e área de interesse.    
	    <br /><br />
    	Seja Bem Vindo(a)
    </p>
</div>

<div class="pagina3 corPagina">
	
    
    
    <br />
    <div style="background:url(imgs/atendimento_cx_tel_horario.png) center top no-repeat; height:120px; width:1000px;">
    	<div class="tam26" style="float:left; width:336px; padding:26px 0 0 160px; color:#04aeda; line-height:34px;">Compre pelo telefone<br />(11) 3116-1010</div>
        <div class="tam16" style="float:left; color:#494949; padding-top:57px; width:220px;">Compre pelo Skype</div>
        <div style="float:left; color:#494949; padding-top:14px; line-height:20px;">
        	Carla Lanzieri: carla.operadora<br />
            Fernanda Oliveira: fernanda.oliveira<br />
			Luciana Soares: luciana.rxt<br />
			Thiago Alamino: thiago.alamino.rxt<br />
			Guilherme Pozzi: guilherme.pozzi
        </div>
    </div>
    <br /><br />
    -->
    <div class="quebra tam16" style=" background:url(imgs/ico-relogio.png) left center no-repeat; height:32px; padding:16px 0 0 40px; margin-left:4px;">
    	Nosso horário de atendimento: Segunda a Sexta-Feira: 9h às 18h30. Sábados: 9h às 13h
    </div>
    <br />
    
    
    <div style="width:1000px;">
	<div>
		<div style="background:#549BA1; padding:10px; float:left; width:27%"><h4 class="tam26 corBranco">Fale Conosco</h4></div>
    	<div style="background:#dedede; padding:10px 150px 10px 10px; float:left;">Utilize o formulário abaixo para enviar sua mensagem</div>
    </div>
    <div style="background:url(imgs/fundo-form-atendimento.png) right bottom no-repeat #EFEFEF;" class="quebra">
    <br /><br />
    <?php
		if($_GET['m']) { 
			echo('<div style="background:#09F; padding:10px 0; width:100%;" class="alinC corBranco">Sua mensagem foi enviada. Agradecemos seu contato. Aguarde nosso retorno.</div><br /><br />');
		}
		if($_GET['e']) { 
			echo('<div style="background:#F30; padding:10px 0; width:100%;" class="alinC corBranco">Para enviar o formulário é necessário preencher todos os campos.</div><br /><br />');
		}
	?>
    
    <script src="addons/jquery-validation-1.13.1/lib/jquery.js"></script>
	<script src="addons/jquery-validation-1.13.1/dist/jquery.validate.js"></script>
    <script>
		$().ready(function() {
			$("#form").validate({
				rules: {
					email: {
						required: true,
						email: true
					},
					email2: {
						required: true,
						email: true,
						equalTo: "#email"
					}
				},
				messages: {
					email: "Formato de email invalido",
					email2: "Os emails precisam ser iguais"
				}
			});
		});
	</script>
    
    <form method="post" action="envia_atendimento.php" id="form" class="pure-form pure-form-aligned" style="padding-left:80px;" >
    	<div class="pure-control-group">
        	<label>Nome completo: </label><input name="nome" type="text" maxlength="50" class="pure-input-2-3 pure-input-rounded" required /><br /><br />
        </div>
    	<div class="pure-control-group">
        	<label>Assunto: </label><input name="assunto" type="text" maxlength="50" class="pure-input-2-3 pure-input-rounded" required /><br /><br />
        </div>
        <div class="pure-control-group">
        	<label>Área de Interesse: </label>
            <select name="area" id="uf" class="pure-input-1-2 pure-input-rounded" style="height:30px;" required >
				<option value="">Selecione</option>
                <option value="Reserva">Reserva</option>
                <option value="Emissão Aérea">Emissão Aérea</option>
                <option value="Operação Terrestre">Operação Terrestre</option>
                <option value="Administrativo">Administrativo</option>
                <option value="Financeiro">Financeiro</option>
                <option value="Marketing">Marketing</option>
                <option value="TI">TI</option>
			</select>
            <br /><br />
		</div>
        <div class="pure-control-group">
        	<label>Telefone: </label><input name="telefone" type="text" minlength="8" maxlength="20" class="pure-input-2-3 pure-input-rounded" required /><br /><br />
        </div>
        <div class="pure-control-group">
        	<label>Email: </label><input name="email" id="email" type="text" maxlength="100" class="pure-input-2-3 pure-input-rounded" required /><br /><br />
        </div>
        <div class="pure-control-group">
        	<label>Confirma email: </label><input name="email2" id="email2" type="text" maxlength="100" class="pure-input-2-3 pure-input-rounded" required /><br /><br />
        </div>
        <div class="pure-control-group">
        	<label>Cidade: </label><input name="cidade" type="text" maxlength="50" class="pure-input-2-3 pure-input-rounded" required /><br /><br />
        </div>
        <div class="pure-control-group">
        	<label>Estado: </label>
            <select name="uf" id="uf" class="pure-input-1-2 pure-input-rounded" style="height:30px;" required >
				<option value="">Selecione</option>
                <option value="SP">São Paulo</option>
                <option value="">-</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
			</select>
            <br /><br />
		</div>
        <div class="pure-control-group">
        	<label><br />Mensagem: </label>
            <textarea name="mensagem" placeholder="" rows="10" class="pure-input-2-3 pure-input-rounded" required></textarea> 
            <br />
		</div>
        <div style="float:right; padding-right:160px; height:30px; font-style:italic;" class="txtP corCinza">&nbsp;&nbsp;&nbsp; * todos os campos obrigatórios</div>
        <div class="pure-control-group quebra"><label>&nbsp;</label><input type="submit" value="&nbsp;&nbsp; Enviar &nbsp;&nbsp;" class="pure-button pure-button-primary pure-input-rounded" /></div>
    
    	<!--
    	<fieldset>
			<legend>Please provide your name, email address (won't be published) and a comment</legend>
			<p><label for="cname">Name (required, at least 2 characters)</label>	<input id="cname" name="name" minlength="2" type="text" required></p>
			<p><label for="cemail">E-Mail (required)</label>						<input id="cemail" type="email" name="email" required></p>
			<p><label for="curl">URL (optional)</label>								<input id="curl" type="url" name="url"></p>
			<p><label for="ccomment">Your comment (required)</label>				<textarea id="ccomment" name="comment" required></textarea></p>
			<p><input class="submit" type="submit" value="Submit"></p>
		</fieldset>
        -->
	</form></div>
    <br /><br />
    </div>
    
	<br /><br />
    <br />
    
</div>

