<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Corema - Consultoria em Registro de Marcas</title>
		<link rel="stylesheet" href="normalize.css">
		<link rel="stylesheet" href="css/estilos.css">
		<script src="prefixfree.min.js"></script>
		<script src="html5shiv-printshiv.min.js"></script>
        <script src="jquery-2.1.3.min.js" type="text/javascript"></script>

        <script type="text/javascript">
        $(document).ready(function(){

            $('#enviar').click(function(){
                $("#ajax_form").submit();
            });


            jQuery('#ajax_form').submit(function(){

                var dados = {
                    name: $("#nome").val(),
                    email: $("#email").val(),
                    message: $("#mensagem").val()
                };

                jQuery.ajax({
                    type: "POST",
                    url: "contato_send.php",
                    data: dados,
                    success: function( data )
                    {
                        alert( data );
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
                <p class="subtitulo sub-contato">Entre em contato com um de nossos consultores: </p>
                <form class="form-padrao" id="ajax_form" method="post" onsubmit="return false;">
                    <label>Nome:</label><br>
                    <input type="text" name="nome" id="nome"><br>
                    <label>E-mail:</label><br>
                    <input type="text" name="email" id="email"/><br>
                    <label>Mensagem:</label><br>
                    <textarea name="mensagem" id="mensagem"></textarea>
                </form>
                <div class="botao-container bt-enviar" id="enviar">
                    <a href="#" class="bt-padrao bt-azul"><div><p class="botao">ENVIAR</p></div></a>
                </div>
                <?php include("pesquise_marca.html"); ?>
            </section>
			<?php include("footer.html"); ?>
		</div>
	</body>
</html>
