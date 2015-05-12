<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title></title>
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
			<section class="section-padrao contato">
                <p class="subtitulo sub-contato">Entre em contato com um de nossos consultores: </p>
                <form class="form-padrao">
                    <label>Nome:</label><br>
                    <input type="text" id="nome"><br>
                    <label>E-mail:</label><br>
                    <input type="text" id="email"/><br>
                    <label>Mensagem:</label><br>
                    <textarea id="mensagem"></textarea>
                </form>
                <?php include("pesquise_marca.html"); ?>
            </section>
			<?php include("footer.html"); ?>
		</div>
	</body>
</html>
