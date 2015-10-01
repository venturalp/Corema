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
        <script src="scripts/jquery.mask.js" type="text/javascript"></script>
        <script src="scripts/corema.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function(){

                realTimeValidator("input[required], #mensagem");

                $('#enviar').click(function(){
                    if (validaCampos("input[required], #mensagem")) $("#ajax_form").submit();
                });


                jQuery('#ajax_form').submit(function(){
                    $("#alerta").text("Seu email está sendo enviado!");
                    $("#alerta, #overlay").show();
                    var dados = {
                        op: "contato",
                        name: $("#nome").val(),
                        email: $("#email").val(),
                        message: $("#mensagem").val()
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
                        },
                        fail: function (data)
                        {
                            $("#overlay").hide();
                            //$("#alerta").text(data);
                            //$( "#alerta" ).fadeOut( 2600 );
                            window.location.href = "nao_enviado.php";
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
			<section class="section-padrao contato">
                <div class="contato-container">
                    <p class="subtitulo sub-contato">Entre em contato com um de nossos consultores: </p>
                    <form class="form-padrao" id="ajax_form" method="post" onsubmit="return false;">
                        <label>*Nome:</label><br>
                        <input type="text" name="nome" id="nome" required><br>
                        <label>*E-mail:</label><br>
                        <input type="text" name="email" id="email" required/><br>
                        <label>*Mensagem:</label><br>
                        <textarea name="mensagem" id="mensagem" required></textarea>
                    </form>
                    <div class="botao-container bt-enviar" id="enviar">
                        <a href="#" class="bt-padrao bt-azul"><div><p class="botao">ENVIAR</p></div></a>
                    </div>
                </div>
            </section>
            <?php include("pesquise_marca.html"); ?>
			<?php include("footer.html"); ?>
		</div>
	</body>
</html>
