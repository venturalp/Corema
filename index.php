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
                            $("#alerta").text(data);
                            $( "#alerta" ).fadeOut( 2600 );
                        },
                        fail: function (data)
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
                <div class="destaque-container">
                    <div class="suamarca">Sua marca em evidência!<br><strong>REGISTRE SUA MARCA.</strong></div>
                    <form class="formulario clearfix" id="ajax_form" method="post" onsubmit="return false;">
                        <h2>Pesquise sua marca</h2>
                        <label>Nome completo:</label><br>
                        <input type="text" id="nome"><br>
                        <label>Telefone:</label><br>
                        <input type="text" id="telefone"><br>
                        <label>E-mail:</label><br>
                        <input type="text" id="email"><br>
                        <label>Marca que deseja registrar:</label><br>
                        <input type="text" id="marca"><br>
                        <label>Ramo de atividade:</label><br>
                        <input type="text" id="ramo"><br>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
			</section>
			<section class="porque">
                <div class="icon-group">
                    <a href="registro_marca.php">
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

                    <a href="pesquise-marca.php">
                    <div>
                        <div class="circulo cir-left"><span class="icon">!</span></div>
                        <span class="desq">QUERO<br>REGISTRAR!</span>
                    </div>
                    </a>
                </div>

			</section>
            <div class="conheca">
                <div style="width:200px; margin: 0 auto;">
                    <a href="nossos_planos.php"><button type="button" name="" value="" class="blue">Conheça nossos planos!</button></a>
                </div>
            </div>
            <section class="ebook">
                <div class="ebook-container">
                    <div>
                        <img src="images/mouse_ebook.png"/>
                        <p>
                            <strong>Saiba detalhadamente como registrar <br>sua marca, fazendo o </strong><a href="files/ebook_corema.pdf">download gratuito<br> do nosso E-book.</a>
                        </p>
                    </div>
                </div><br>
                <a href="files/lei_n_9279.pdf">
                            Lei nº 9.279 de 14 de Maio de 1996 - Regula direitos e obrigações relativos à propriedade industrial.
                </a>
            </section>
			<div class="profissionais">
				<div>Contamos com profissionais especializados e competentes para atender<br>sua empresa e levar as soluções que você realmente precisa!</div>
			</div>
			<?php include("footer.html"); ?>
		</div>
	</body>
</html>
