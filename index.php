<?php
session_start();
?>

<html>

<head>

    <link rel="stylesheet" type="text/css" href="style.css">

    <meta charset="utf-8">

</head>

<body>

    <?php if(empty($_SESSION["usuario"])){?>
    <div class="container-fluid">

        <div class="box">

            <div id="login">

                <form action="controle/login.php" method="post">

                    <h1 id="titulo"> KD MEEEEU BABA?®</h1>

                    <div>

                        <label for="mail">Email</label>

                        <input type="email" name="email" id="mail" placeholder="E-mail">

                    </div>

                    <div class="margin-top">

                        <label for="pass" style="marg">Senha</label>

                        <input type="password" name="senha" id="pass" placeholder="Senha">

                    </div>

                    <p> <input type="submit" value="Logar" /> </p>


            </div>

            </form>


        </div>
    </div>
    
    <?php } else{

    header("location: visao/index.php");    
    }
    ?>



</body>



</html>