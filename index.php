<?php
session_start();
?>


<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

    <meta charset="utf-8">

</head>

<body style="background-color:#FDB827" >

    <?php if(empty($_SESSION["usuario"])){?>
    
    <div class="container-fluid" id="cabecalho">
        <div class="col-6">
            <img src="visao/logo.png" alt="">
            <p><a href="login.php"><button id="botao_entrar">Entrar</button></a>
        </div>
       </p>
       
    </div>

    <div class="container-fluid">
        

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
                <div class="item active">
                    <img src="visao/compartilhe.png" alt="Compartilhe suas jogadas e convide seus amigos pro baba!" style="width:100%;">
                </div>

                <div class="item">
                    <img src="visao/adicione_um_jogo.png" alt="Marque um baba onde você quiser!" style="width:100%;">
                </div>
        
                <div class="item">
                    <img src="visao/logo.png" alt="KD meu baba!" style="width:100%;">
                </div>
        </div>

        <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    
    <?php } 
    
    else{

    header("location: visao/index.php");    
    }
    ?>



</body>



</html>