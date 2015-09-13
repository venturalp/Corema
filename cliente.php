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
			<section class="section-padrao cliente">
                <div class="cliente-container">
                    <h1>LOGIN: </h1>
                    <form class="form-padrao">
                        <label>E-mail:</label><br>
                        <input type="text" id="nome"><br>
                        <label>Senha:</label><br>
                        <input type="password" id="email"/><br>
                    </form>
                </div>
                <div class="botoes-login">
                    <div class="botao-container">
                        <a href="#" class="bt-padrao bt-azul"><div><p class="botao">ENTRAR</p></div></a>
                    </div>
                    <div class="botao-container">
                        <a href="#" class="bt-padrao bt-cinza"><div><p class="botao">REGISTRAR</p></div></a>
                    </div>
                </div>
            </section>
			<?php include("footer.html"); ?>
		</div>
	</body>
</html>
