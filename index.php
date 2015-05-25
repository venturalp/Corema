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
                    $("#alerta").text("Seu email está sendo enviado!");
                    $("#alerta, #overlay").show();
                    var dados = {
                        op: "pesquisa-marca",
                        name: $("#nome").val(),
                        email: $("#email").val(),
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
                            $("#alerta").text(data);
                            $( "#alerta" ).fadeOut( 2600 );
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
			<section class="destaque">
                <div class="suamarca">Sua marca em evidência!<br><strong>REGISTRE SUA MARCA.</strong></div>
				<form class="formulario clearfix" id="ajax_form" method="post" onsubmit="return false;">
					<h2>Pesquise sua marca</h2>
					<label>Nome completo:</label><br>
					<input type="text" id="nome" class="msg_erro"><br>
                    <label>E-mail:</label><br>
					<input type="text" id="email"><br>
                    <label>Marca que deseja registrar:</label><br>
					<input type="text" id="marca"><br>
                    <label>Ramo de atividade:</label><br>
					<input type="text" id="ramo"><br>
					<input type="submit" value="Enviar">
				</form>
			</section>
			<section class="porque">
                <div class="icon-group">
                    <a href="porque-registrar.php">
                    <div>
                        <div class="circulo"><span class="icon">?</span></div>
                        <span class="desq">POR QUE<br>REGISTRAR?</span>
                    </div>
                    </a>
                    <a href="como_registro.php">
                    <div>
                        <div class="circulo cir-left"><span class="icon">?</span></div>
                        <span class="desq">COMO<br>REGISTRO?</span>
                    </div>
                    </a>

                    <div>
                        <div class="circulo cir-left"><span class="icon">!</span></div>
                        <span class="desq">QUERO<br>REGISTRAR!</span>
                    </div>
                </div>


                <iframe width="500" height="375" src="https://www.youtube.com/embed/aE2GCa-_nyU" frameborder="0" allowfullscreen></iframe>
			</section>
			<div class="profissionais">
				<div>Contamos com profissionais especializados e competentes para atender<br>sua empresa e levar as soluções que você realmente precisa!</div>
			</div>
			<?php include("footer.html"); ?>
		</div>
	</body>
</html>
