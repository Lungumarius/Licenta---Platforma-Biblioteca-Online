<!doctype html>
<html lang="en">
<?php
	session_start();
	if(!isset($_SESSION['tip_user']))
		header("Location: ../html/index.php");
	if($_SESSION['tip_user']=="1")
		header("Location: main_page_manager.php");
?>
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Platforma Biblioteca Online</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5dcf37b4b9.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/script.js"></script>
</head>



<body>



<header>
    <div class="container">
        <nav class="navbar">
            <div class="navbar brand">
                 <i class="fas fa-book fa-3x" style="align-self: center; margin:3vh;"></i>

                <h1 style="color:white; font-size: 2rem; align-self: center"> Biblioteca online</h1>


                <i class="fas fa-book fa-3x" style="align-self: center; margin:3vh;"></i>


            </div>
            <div class="navbar-search">
                <input class="search-bar" type="text" placeholder="Search..">
                <button class="search-button" style="align-self: center; margin:10px; border-size:2px;border-radius: 20px;" href="#">
                    <i class="fas fa-search fa-2x" ></i>
                </button>
            </div>
            <div class="navbar-items">
                <ul class="login-items">
                   <li class="login-item"><a class="login" href="#" id="profilul_meu" >Profilul meu</a></li>
                   <li class="login-item" style="margin-right: 5vh"><a class="login" id="log_out" href="../php/log_out.inc.php">Log out</a></li>
                </ul>

            </div>
        </nav>
    </div>
</header>
<main>

    <div class="content">
        <div class="sidebar">
            <h1 class="title">
                Categorii
            </h1>
            <ul class="categorii">
                <li class="categorie"><a class="cat" href="#">Lorem Ipsum</a></li>
                <li class="categorie"><a class="cat" href="#">Lorem Ipsum</a></li>
                <li class="categorie"><a class="cat" href="#">Lorem Ipsum</a></li>
                <li class="categorie"><a class="cat" href="#">Lorem Ipsum</a></li>
                <li class="categorie"><a class="cat" href="#">Lorem Ipsum</a></li>
                <li class="categorie"><a class="cat" href="#">Lorem Ipsum</a></li>
                <li class="categorie"><a class="cat" href="#">Lorem Ipsum</a></li>
            </ul>
        </div>
        <div class="slideshow">


        </div>

    </div>
    <section>
        <div class="content2">
            <h1 class="title" id="titlu" > Top 10 Imprumuturi</h1>
     <div class="carti">
        <div class="carte">
            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
            <h3 style="text-align: center" > Titlu </h3>
            <h3 style="text-align: center" > Autor </h3>
        </div>
        <div class="carte">
            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
            <h3 style="text-align: center" > Titlu </h3>
            <h3 style="text-align: center" > Autor </h3>
        </div>
        <div class="carte">
            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
            <h3 style="text-align: center" > Titlu </h3>
            <h3 style="text-align: center" > Autor </h3>
        </div>
        <div class="carte">
            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
            <h3 style="text-align: center" > Titlu </h3>
            <h3 style="text-align: center" > Autor </h3>
        </div>
        <div class="carte">
            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
            <h3 style="text-align: center" > Titlu </h3>
            <h3 style="text-align: center" > Autor </h3>
        </div>
        <div class="carte">
            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
            <h3 style="text-align: center" > Titlu </h3>
            <h3 style="text-align: center" > Autor </h3>
        </div>
        <div class="carte">
            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
            <h3 style="text-align: center" > Titlu </h3>
            <h3 style="text-align: center" > Autor </h3>
        </div>
        <div class="carte">
            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
            <h3 style="text-align: center" > Titlu </h3>
            <h3 style="text-align: center" > Autor </h3>
        </div>
        <div class="carte">
            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
            <h3 style="text-align: center" > Titlu </h3>
            <h3 style="text-align: center" > Autor </h3>
        </div>
        <div class="carte">
            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
            <h3 style="text-align: center" > Titlu </h3>
            <h3 style="text-align: center" > Autor </h3>
        </div>
    </div>
            <h1 class="title" id="titlu" > Top 10 Recomandari</h1>
            <div class="carti">
                <div class="carte">
                    <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
                    <h3 style="text-align: center" > Titlu </h3>
                    <h3 style="text-align: center" > Autor </h3>
                </div>
                <div class="carte">
                    <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
                    <h3 style="text-align: center" > Titlu </h3>
                    <h3 style="text-align: center" > Autor </h3>
                </div>
                <div class="carte">
                    <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
                    <h3 style="text-align: center" > Titlu </h3>
                    <h3 style="text-align: center" > Autor </h3>
                </div>
                <div class="carte">
                    <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
                    <h3 style="text-align: center" > Titlu </h3>
                    <h3 style="text-align: center" > Autor </h3>
                </div>
                <div class="carte">
                    <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
                    <h3 style="text-align: center" > Titlu </h3>
                    <h3 style="text-align: center" > Autor </h3>
                </div>
                <div class="carte">
                    <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
                    <h3 style="text-align: center" > Titlu </h3>
                    <h3 style="text-align: center" > Autor </h3>
                </div>
                <div class="carte">
                    <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
                    <h3 style="text-align: center" > Titlu </h3>
                    <h3 style="text-align: center" > Autor </h3>
                </div>
                <div class="carte">
                    <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
                    <h3 style="text-align: center" > Titlu </h3>
                    <h3 style="text-align: center" > Autor </h3>
                </div>
                <div class="carte">
                    <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
                    <h3 style="text-align: center" > Titlu </h3>
                    <h3 style="text-align: center" > Autor </h3>
                </div>
                <div class="carte">
                    <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
                    <h3 style="text-align: center" > Titlu </h3>
                    <h3 style="text-align: center" > Autor </h3>
                </div>
            </div>
        </div>

    </section>

</main>

<footer>
    <div class="container3">
        <h1 class="title" style="margin:0; padding-top: 10vh; font-size:4rem;"> Footer </h1>
    </div>
</footer>




</body>




</html>
