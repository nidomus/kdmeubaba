<?php
session_start();
require_once("../modelo/Usuario.php");
?>

<?php
$usuario= unserialize($_SESSION["usuario"]);
$conexao = new PDO("mysql:host=127.0.0.1;dbname=banco_usuario;port=3306","root","");
?>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title></title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

</head>

<body id="body" background="imagens/oie_transparent.png">

	<div class="container-fluid">


		<div id="topo" class="jumbotron-fluid row">


		<div id="topo_1" class="col-2">
				<a href="index.php" id="linkpag">
				<img id="logoIcon" src="imagens/logo_short.png" alt="">
				</a>
			</div>
			<div class="col-6" id="main">
			<form class="form-inline" action="">
				<input id="pesquisar" class="form-control mr-sm-2" type="text" placeholder="Pesquisar">

			</form>
			</div>

			<div class="col-4 row" id="perfil">
			<div class="col-2" id="fotoPerfil">
				<img id="icon" src="imagens/basketball-player.png" alt="">
				</div>

			<div class="col-10 row" id="teste">
				<div class="col-6" id="userName">
					<?php if($usuario->getNivel()==1){?>

					<p id="text"> <?=$usuario->getNome();?> (Moderador)</p>
					<?php } else{ ?>
					<p id="text"> <?=$usuario->getNome();?></p>
					<?php } ?>
				</div>
						
					<div class="buttonBox col-6 fit">

			<img src="imagens/notification.png" width="30px" alt=""id="iconBar">
			<a href="../controle/sair.php"><img src="imagens/exit_icon.png" width="30px" alt=""id="iconBar"></a>

</div>
			</div>
			</div>
			</div>
			

			
		</div>
	</div>

	<div class=" container-fluid row " id="corpo">


		<!-- corpo -->
		<div class=" col-2" id="esquerdo">
			<div class="box">
				<p class="text1"> Grupos </p>
			</div>
			<div class="box ">
				<p class="text1"> Amigos </p>

			</div>

		</div>

		<div class="col-6" id="centro">

		<button id="bt_postagem"> Adicionar Postagem </button>
			<?php
		

        $sql = "select txt from postagem";
        $acao = $conexao->query($sql);

			foreach($acao as $row)

			{
			?>	

			<div class="postagem">
			<div id="topoPostagem" class="row">
							<div id="fotoPostagem" class="col-2 ">
								<img src="imagens/icon.png" id="usrIcon" alt="John Doe" class="mr-3 mt-3 rounded-circle">
							</div>
								<div id="infPostagem" class="col-8">

								</div>
	
								<div class="dropdown col-2">
						<button type="button" class="btnSemBorda dropdown-toggle" data-toggle="dropdown">
							<img src="imagens/menu.png">
						</button>
	
						<div class="dropdown-menu">
						
							<a class="dropdown-item" href="#">COMPARTILHAR</a>
							<a class="dropdown-item" href="#">DENUNCIAR</a>
							<a class="dropdown-item" href="#">SALVAR</a>
							<?php if($usuario->getNivel()==1){?>
							<a class="dropdown-item" href="#">BLOQUEAR POSTAGEM</a>
							<a class="dropdown-item" href="#">ANALISAR DENÚCIAS</a>
							<?php } ?>
						</div>
					</div>
					</div>

			<p><?=$row["txt"]?></p>

			</div>



					<!-- <div class="postagem">
					
					<div class="container">
							
	
	
						<div id="topoPostagem" class="row">
							<div id="fotoPostagem" class="col-2 ">
								<img src="imagens/icon.png" id="usrIcon" alt="John Doe" class="mr-3 mt-3 rounded-circle">
							</div>
								<div id="infPostagem" class="col-8">

								</div>
	
								<div class="dropdown col-2">
						<button type="button" class="btnSemBorda dropdown-toggle" data-toggle="dropdown">
							<img src="imagens/menu.png">
						</button>
	
						<div class="dropdown-menu">
						
							<a class="dropdown-item" href="#">COMPARTILHAR</a>
							<a class="dropdown-item" href="#">DENUNCIAR</a>
							<a class="dropdown-item" href="#">SALVAR</a>
							<?php if($usuario->getNivel()==1){?>
							<a class="dropdown-item" href="#">BLOQUEAR POSTAGEM</a>
							<a class="dropdown-item" href="#">ANALISAR DENÚCIAS</a>
							<?php } ?>
						</div>
					</div>
	
						</div>
						<div class="conteudo">

							
						</div>	
						</div>
						<div class="reactionBox">
	
						<img src="imagens/like_icon.png" width="30px" alt=""id="iconBar">
						<img src="imagens/coment_icon.png" width="30px" alt=""id="iconBar">
						<?php if($usuario->getNivel()==1){?>
							<p><img src="imagens/alerta_icon.png" width="30px" alt=""id="iconBar"> 0 </p>
							<?php } ?>
	
	
						</div>
					</div>
				</div> -->

			<?php
			}

			?>
							</div>

			
		<div class="col-3 container" id="direita">



			<div class="container">

				<!--
				<div class="mapa box">


					<img src="imagens/mapa.png" width="100%" usemap="#mapa">

					<map name="mapa">


						<area shape="rect" coords="140,147,188,205" href="addJogo.html" alt="IFSP" target="_blank">


					</map>

					<div class="menu row">

						<div class="btn-group col-6">
							<button type="button" class="btm es">Zoom in</button>
							<button type="button" class="btm d">Zoom out</button>

						</div>

						<div class="col-6">
							<input class="pesquisar" type="text" placeholder="Pesquisar">


						</div>



					</div>
				</div>

			</div>
					-->			
			<div class="container-fluid  ">
				<div class="box2">
					<div class="container-fluid">
						<h2 class="text1">Meus Jogos</h2>
						<div class="list-group">
							<a href="addJogo.html" class="list-group-item list-group-item-action">BABA DO CIEPS</a>
							<a href="addJogo.html" class="list-group-item list-group-item-action">BABA ARRAIAL</a>
							<a href="addJogo.html" class="list-group-item list-group-item-action">BABA IFBA</a>
						</div>
						<div class="pad w-100">

							<a href="addJogo.html"><button class="bt">Adicionar Jogo</button></a>
						</div>
					</div>




				</div>

			</div>

			</div>

		</div>






	<div class="modal" id="addPost">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title"></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">


				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>


	<div class="modal" id="confirmar">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title"></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<p class="text1"> Ação confirmada<p>

				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
	<div class="modal" id="cancelar">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title"></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<p class="text1"> Ação cancelada<p>

				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>



</body>

</html>