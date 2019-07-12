<?php
session_start();
require_once("../modelo/Usuario.php");
?>

<?php
$usuario= unserialize($_SESSION["usuario"]);
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

<body id="body" >

	<div class="container-fluid">


		<div id="topo" class="jumbotron-fluid row">


			<div class="col-9">
				<a href="index.php" id="linkpag">
<<<<<<< HEAD
				<img id="logoIcon" src="logo_short.png" alt="">
=======
					<p id="titulo"> KD MEU BABA?</p>
>>>>>>> 5f354da053f5e6c058a6a443a64d1b03f57698dc
				</a>
			</div>
<<<<<<< HEAD
			<div class="col-1" id="perfil">

				<img id="icon" src="basketball-player.png" alt="">

=======
			<div class="col-6" id="main">
			<form class="form-inline" action="">
				<input id="pesquisar" class="form-control mr-sm-2" type="text" placeholder="Pesquisar">

			</form>

			</div>

			<div class="col-3 row" id="perfil">
			<div class="col-2" id="fotoPerfil">
				<img id="icon" src="basketball-player.png" alt="">
				</div>

			<div class="col-10 row" id="teste">
				<div class="col-6 fit">
					<p id="text"> <?=$usuario->getNome();?></p>
				
				</div>
						
					<div class="buttonBox col-6 fit">

			<img src="notification.png" width="30px" alt=""id="iconBar">
			<a href="../controle/sair.php"><img src="exit_icon.png" width="30px" alt=""id="iconBar"></a>

</div>
			</div>
>>>>>>> 97dcf53cdfcac6c90f3c2a30d1fd52416def0037
			</div>

			<div class="col-2" id="teste">
				<table>
					<tr>
						<td>
							<p> nome: <?=$usuario->getNome();?> </p>


						</td>
					</tr>
					<tr>
						<td>
							<a href="../controle/sair.php"> Sair </a>
						</td>
					</tr>
				</table>
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
			<div class="box ">



				<img src="notification.png" width="30px" alt="">



			</div>

		</div>

		<div class="col-6" id="centro">
			<form class="form-inline" action="">
				<input id="pesquisar" class="form-control mr-sm-2" type="text" placeholder="Pesquisar">

			</form>

			<div class="">


				<div class="postagem">

					<div id="topoPostagem" class="row">
						<div id="fotoPostagem" class="col-2 ">
							<img src="icon.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:70px;">
						</div>
							<div id="infPostagem" class="col-10">
								<h4>LBJames <small><i>Posted on February 19, 2016</i></small></h4>
								<p>Sauce!</p>
							</div>

						
					</div>
					<div class="conteudo">
						<img class="center" id="img" src="post.jpg" alt="" width="50%">

					</div>	
					</div>
				</div>
				<div class="postagem">
					<div id="topoPostagem" class="row">
						<div id="fotoPostagem" class="col-2 ">
							<img src="icon.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:70px;">
						</div>
						<div id="infPostagem" class="col-10">
							<h4>NJokic <small><i>Convite February 19, 2016</i></small></h4>
							<p></p>
						</div>

					</div>
					<div class="center">
						<h3> <b>Evento: BABA FONTANA</b></h3>
						<table>
							<tr>

								<td><button class="bt" data-toggle="modal" data-target="#confirmar">Participar</button>
								</td>
								<td><button class="bt" id="Cancelar" data-toggle="modal"
										data-target="#cancelar">Cancelar</button></td>
							</tr>
						</table>
					</div>


				</div>



			</div>

		<div class="col-4 container" id="direita">



			<div class="container">


				<div class="mapa box">


					<img src="mapa.png" width="100%" usemap="#mapa">

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

	<div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title"></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form class="cor_fundo" action="" method="post">
						<h1 class="cor_texto">LOGIN</h1>

						<label for="email" class="cor_texto">Email</label>
						<input type="email" id="email">
						<p></p>
						<p></p>
						<p>
							<label for="password" class="cor_texto">Senha</label>
							<input type="password" id="password">
						</p>
						<p>
							<a href="https://trello-attachments.s3.amazonaws.com/5c77d5fe4af24a5988869ef7/5cc106c3d001c88024b36207/2331268090422e7d0e84ecaad665dcb4/preencher"
								class="cor_texto">esqueceu a senha?</a>
							<a href="https://trello-attachments.s3.amazonaws.com/5c77d5fe4af24a5988869ef7/5cc106c3d001c88024b36207/2331268090422e7d0e84ecaad665dcb4/preencher"
								class="cor_texto posicao_texto">ainda não possui cadastro?</a>
						</p>
						<p>
							<input type="submit" name="entrar" class="cor_botao">
						</p>

					</form>

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