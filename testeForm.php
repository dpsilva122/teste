<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<body>
            <form class="pure-form" style="padding-left:13px;" method="post" action="envia_newsletter.php" onSubmit="return CheckFormContato()" name="formContato" >
                <div style="width:20%; float:left; padding-top:35px; font-weight:bold;" class="corLilas">RECEBA INFO</div>
                <div style="width:80%; float:left; padding-top:30px;">
                    <select name="quem" id="quem" class="pure-input-1-5 pure-input-rounded" style="height:30px;">
                        <option value="">Você é?</option>
                        <option value="t11">teste1</option>
                        <option value="t22">teste2</option>
                        <option value="t33">teste3</option>
                        <option value="t44">teste4</option>
                        <option value="Outros">Outros</option>
                    </select>
                    &nbsp;&nbsp;&nbsp;
                    <select name="uf" id="uf" class="pure-input-1-5 pure-input-rounded" style="height:30px;">
                        <option value="">De onde você é?</option>
                        <option value="t1">teste</option>
                    </select>
                    &nbsp;&nbsp;&nbsp;
                    <input name="nome" type="text" maxlength="30" style="font-size:12px;" class="pure-input-1-5 pure-input-rounded" placeholder="Nome" />
                    &nbsp;&nbsp;&nbsp;
                    <input name="email" type="text" maxlength="30" style="font-size:12px;" class="pure-input-1-5 pure-input-rounded" placeholder="Email" />
                    &nbsp;&nbsp;&nbsp;<input type="submit" value="&nbsp;&nbsp;Cadastrar&nbsp;&nbsp;" class="pure-button pure-button-primary pure-input-rounded" />
                </div>
            </form>

            <script language="JavaScript">;
                function CheckFormContato(){
                    var okay = false;
                    var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);

                    //--------------------------------quem
                    if (eval("document.formContato.quem.value") == "") {
                        alert ("Antes de efetuar o cadastro gostariamos de saber quem é você."); eval("document.formContato.quem.focus()"); okay = false;
                    }
                    //--------------------------------uf
                    else if (eval("document.formContato.uf.value") == ""){
                        alert ("Por favor, nos diga o estado onde mora."); eval("document.formContato.uf.focus()"); okay = false;
                    }
                    //--------------------------------nome
                    else if (eval("document.formContato.nome.value") == ""){
                        alert ("O campo 'nome' deve ser preenchido."); eval("document.formContato.nome.focus()"); okay = false;
                    }
                    //--------------------------------email
                    else if (eval("document.formContato.email.value") == ""){
                        alert ("Nos diga um email para entrarmos em contato."); eval("document.formContato.email.focus()"); okay = false;
                    }
                    else if (er.test(eval("document.formContato.email.value")) == false){
                        alert ("Email Invalido"); eval("document.formContato.email.focus()"); okay = false;
                    }
                    //--------------------------------email confirmação
                    else if (eval("document.formContato.email2.value") == ""){
                        alert ("O campo 'e-mail confirmação' deve ser preenchido."); eval("document.formContato.email2.focus()"); okay = false;
                    }
                    else if ( eval("document.formContato.email.value") != eval("document.formContato.email2.value") ){
                        alert ("O email de confirmação está diferente do email informado acima"); eval("document.formContato.email2.focus()"); okay = false;
                    }

                    else{ okay = true; }
                    return okay;
                }
			</script>
          </body>
</html>