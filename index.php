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
	</head>
	<body>
		<div class="container">
			<header>
                <?php include("header.html"); ?>
			</header>
			<section class="destaque">
                <div class="suamarca">Sua marca em evidência!<br><strong>REGISTRE SUA MARCA.</strong></div>
				<form class="formulario clearfix">
					<h2>Pesquise sua marca</h2>
					<label>Nome completo:</label><br>
					<input type="text" id="nome"><br>
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
                    <div>
                        <div class="circulo"><span class="icon">?</span></div>
                        <span class="desq">POR QUE<br>REGISTRAR?</span>
                    </div>
                    <div>
                        <div class="circulo cir-left"><span class="icon">?</span></div>
                        <span class="desq">COMO<br>REGISTRO?</span>
                    </div>
                    <a href="como_registro.php">
                    <div>
                        <div class="circulo cir-left"><span class="icon">!</span></div>
                        <span class="desq">QUERO<br>REGISTRAR!</span>
                    </div>
                    </a>
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
