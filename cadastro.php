<?php
session_start();
?>

<html>

<head>

    <link rel="stylesheet" type="text/css" href="style.css">

    <meta charset="utf-8">

</head>

<body background="visao/imagens/oie_transparent.png">

    <?php if (empty($_SESSION["usuario"])) { ?>
        <div class="container-fluid">

            <div class="box">
                <div >
                    <p><img id="logo" src="visao/imagens/logo.png" alt=""></p>
                </div>

                <div id="login">


                    <form action="controle/cadastrar.php" method="post">


                        <div>

                            <label for="mail">Nome</label>

                            <input type="text" name="nome" id="mail" placeholder="Nome">

                        </div>

                        <div>
                    <br>
                    <label for="mail">Email</label>

                    <input type="email" name="email" id="mail" placeholder="E-mail">

                    </div>
                    <br>
                        <div class="margin-top">

                            <label for="pass">Senha</label>

                            <input type="password" name="senha" id="pass" placeholder="Senha">

                        </div>

                        <p> <input type="submit" value="Cadastrar" /> </p>
        


                </div>

                </form>


            </div>
        </div>

    <?php } else {

        header("location: visao/index.php");
    }
    ?>



</body>



</html>