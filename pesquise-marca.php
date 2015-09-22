<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Corema - Consultoria em Registro de Marcas</title>
        <?php include("tags.html"); ?>
		<link rel="stylesheet" href="normalize.css">
		<link rel="stylesheet" href="css/estilos.css">
		<script src="prefixfree.min.js"></script>
		<script src="html5shiv-printshiv.min.js"></script>
        <script src="jquery-2.1.3.min.js" type="text/javascript"></script>
        <script src="scripts/corema.js" type="text/javascript"></script>
        <script src="scripts/jquery.mask.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function(){

                $("input[required][id!=email][id!=telefone]").on("keyup", function(){
                    validaVazio($(this));
                });

                //DEFININDO VALOR
                $("#telefone").mask('(00) 0000-00009');
                 $("#telefone").blur(function(event) {
                   if($("#telefone").val().length == 15){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
                      $("#telefone").mask('(00) 00000-0009');
                   } else {
                      $("#telefone").mask('(00) 0000-00009');
                   }
                });

                $("input[id=telefone]").on("keyup", function(){
                    validaTelefone($(this));
                });

                $("input[id=email]").on("keyup", function(){
                    validaEmail($(this));
                });

                $('#enviar').click(function(){
                    if (!validaVazio($("#nome")))
                        $("#nome").focus();
                    else if (!validaEmail($("#email")))
                        $("#email").focus();
                    else
                        $("#ajax_form").submit();
                });

                jQuery('#ajax_form').submit(function(){
                    $("#alerta").text("Seu email está sendo enviado!");
                    $("#alerta, #overlay").show();
                    var dados = {
                        op: "pesquisa-marca",
                        name: $("#nome").val(),
                        email: $("#email").val(),
                        telefone: $("#telefone").val(),
                        marca: $("#marca").val(),
                        ramo: $("#ramo").val()
                    };

                    jQuery.ajax({
                        type: "POST",
                        url: "corema_ajax.php",
                        data: dados,
                        success: function( data )
                        {
                            $("#overlay").hide();
                            //$("#alerta").text(data);
                            //$( "#alerta" ).fadeOut( 2600 );
                            if (data == "failed")
                                window.location.href = "nao_enviado.php";
                            else
                                window.location.href = "enviado.php";
                            $("#ajax_form")[0].reset();
                        }

                    });
                });

            });
        </script>

	</head>
	<body>
		<div class="container">
			<header>
                <?php include("header.html"); ?>
			</header>
			<section class="section-padrao pesq-marca">
                <div class="pesq-marca-container">
                    <h1>PESQUISE SUA MARCA</h1>
                    <form class="form-padrao" id="ajax_form" method="post" onsubmit="return false;">
                        <label>Nome completo:</label><br>
                        <input type="text" id="nome" required><br>
                        <label>Telefone:</label><br>
                        <input type="text" id="telefone" required><br>
                        <label>E-mail:</label><br>
                        <input type="text" id="email" required placeHolder="email@provedor.com"/><br>
                        <label>Marca que deseja registrar:</label><br>
                        <input type="text" id="marca" required/><br>
                        <label>Ramo de atividade:</label><br>
                        <input type="text" id="ramo"/><br>
                    </form>
                </div>
                <div class="botao-container bt-enviar" id="enviar">
                    <a href="#" class="bt-padrao bt-azul"><div ><p class="botao">ENVIAR</p></div></a>
                </div>
            </section>

			<?php include("footer.html"); ?>
		</div>
	</body>
</html>
