<!doctype html>
<html lang="en">

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
	<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Roboto+Mono:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5dcf37b4b9.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/script.js"></script>
</head>



<body>


	<header>
	    <div class="container">
	        <nav class="navbar">
	            <div class="navbar brand">
	                <i class="fas fa-book fa-3x" style="align-self: center; margin:3vh;"></i>
	                <h1 style="color:black; font-size: 2rem; align-self: center;"><a style="color:black" href="index.php" class="brand" > Biblioteca online</a></h1>
	                <i class="fas fa-book fa-3x" style="align-self: center; margin:3vh;"></i>
	            </div>
	            <div class="navbar-search">
	                <input class="search-bar" type="text" placeholder="Search..">
	                <button class="search-button" style="align-self: center; margin:10px; border-size:2px;border-radius: 20px; cursor: pointer; heigh:6vh;" href="#">
	                	<i class="fas fa-search fa-2x" ></i>
	                </button>
	            </div>
	            <div class="navbar-items">
	                <ul class="login-items">
	                   	<li class="login-item"><a class="login" href="#" id="optiuni_admin">Optiuni</a></li>
					    <li class="login-item" style="margin-right: 5vh"><a class="login" id="log_out" href="../php/log_out.inc.php">Log out</a></li>
	                </ul>
	            </div>
	        </nav>
	    </div>
	</header>
	<main>

	    <div class="content" style=" margin:0px">
	        <div class="sidebar">
	            <h1 class="cat1" style="text-align: center; font-size: 3.5vh;">
	                Categorii
	            </h1>
		        <ul class="categorii">
					<li class="categorie"><a class="cat" value="Lingvistica, dictionare" href="#">Lingvistica, dictionare </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Arta, arhitectura </a></li>
					<li class="categorie"><a class="cat" value="Biografii, memorii, jurnale" href="#">Biografii, memorii, jurnale </a></li>
					<li class="categorie"><a class="cat" value="Limbi straine" href="#">Limbi straine </a></li>
					<li class="categorie"><a class="cat" value="Poezie, teatru, studii literare" href="#">Poezie, teatru, studii literare </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Fictiune </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Ghiduri si harti turistice, atlase </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Enciclopedii </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Istorie </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Religie </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Filosofie </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Psihologie </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Stiinte sociale. Politica </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Marketing si comunicare </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Business si economie </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Drept </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Medicina </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Stiinte exacte. Matematica</a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Natura si mediu </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Tehnica si tehnologie </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Computere si internet</a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Sanatate, dezvoltare personala </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Lifestyle, sport, timp liber </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Pentru copii, adolescenti </a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Culinare</a></li>
					<li class="categorie"><a class="cat" value="Arta, arhitectura" href="#">Benzi desenate</a></li>
	            </ul>
	        </div>
	        <div class="slideshow">
				<h1 class="title" style="border-bottom-style:solid; border-bottom-color:gray; border-bottom-width:2px;padding-bottom:5vh;">TOP 10 IMPRUMUTURI</h1>
				<div class="first-two">
						<div class="carte">
				            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
				            <h3 style="text-align: center; " > Titlu </h3>
				            <h3 style="text-align: center" > Autor </h3>
				        </div>
						<div class="carte">
					        <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
					        <h3 style="text-align: center; " > Titlu </h3>
					        <h3 style="text-align: center" > Autor </h3>
					    </div>
				</div>
				<div class="last-eight">
						<div class="carte">
				            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
				            <h3 style="text-align: center; " > Titlu </h3>
				            <h3 style="text-align: center" > Autor </h3>
				        </div>
						<div class="carte">
					        <img src="images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
					        <h3 style="text-align: center; " > Titlu </h3>
					        <h3 style="text-align: center" > Autor </h3>
					    </div>
						<div class="carte">
				            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
				            <h3 style="text-align: center; " > Titlu </h3>
				            <h3 style="text-align: center" > Autor </h3>
				        </div>
						<div class="carte">
					        <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
					        <h3 style="text-align: center; " > Titlu </h3>
					        <h3 style="text-align: center" > Autor </h3>
					    </div>
						<div class="carte">
				            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
				            <h3 style="text-align: center; " > Titlu </h3>
				            <h3 style="text-align: center" > Autor </h3>
				        </div>
						<div class="carte">
					        <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
					        <h3 style="text-align: center; " > Titlu </h3>
					        <h3 style="text-align: center" > Autor </h3>
					    </div>
						<div class="carte">
				            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
				            <h3 style="text-align: center; " > Titlu </h3>
				            <h3 style="text-align: center" > Autor </h3>
				        </div>
						<div class="carte">
					        <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
					        <h3 style="text-align: center; " > Titlu </h3>
					        <h3 style="text-align: center" > Autor </h3>
					    </div>
				</div>
				<h1 class="title" style="border-bottom-style:solid; border-bottom-color:gray; border-bottom-width:2px;padding-bottom:5vh; margin-top:30vh;">TOP 10 NOI APARITII</h1>
				<div class="first-two">
						<div class="carte">
				            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
				            <h3 class="titlu-pict" > Titlu </h3>
				            <h3 style="text-align: center" > Autor </h3>
				        </div>
						<div class="carte">
					        <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
					        <h3 style="text-align: center; " > Titlu </h3>
					        <h3 style="text-align: center" > Autor </h3>
					    </div>
				</div>
				<div class="last-eight">
						<div class="carte">
				            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
				            <h3 style="text-align: center; " > Titlu </h3>
				            <h3 style="text-align: center" > Autor </h3>
				        </div>
						<div class="carte">
					        <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
					        <h3 style="text-align: center; " > Titlu </h3>
					        <h3 style="text-align: center" > Autor </h3>
					    </div>
						<div class="carte">
				            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
				            <h3 style="text-align: center; " > Titlu </h3>
				            <h3 style="text-align: center" > Autor </h3>
				        </div>
						<div class="carte">
					        <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
					        <h3 style="text-align: center; " > Titlu </h3>
					        <h3 style="text-align: center" > Autor </h3>
					    </div>
						<div class="carte">
				            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
				            <h3 style="text-align: center; " > Titlu </h3>
				            <h3 style="text-align: center" > Autor </h3>
				        </div>
						<div class="carte">
					        <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
					        <h3 style="text-align: center; " > Titlu </h3>
					        <h3 style="text-align: center" > Autor </h3>
					    </div>
						<div class="carte">
				            <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
				            <h3 style="text-align: center; " > Titlu </h3>
				            <h3 style="text-align: center" > Autor </h3>
				        </div>
						<div class="carte">
					        <img src="../images/1.jpg" class="img" style="width: 15vh; height: 15vh; align-self: center">
					        <h3 style="text-align: center; " > Titlu </h3>
					        <h3 style="text-align: center" > Autor </h3>
					    </div>
				</div>

	        </div>

	</main>




</body>




</html>
