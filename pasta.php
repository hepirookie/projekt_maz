<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SUPIZZA</title>
<link rel="Stylesheet" href="style2.css">
<link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet'>
<link rel="icon" type="image/png" href="img/favicon2.ico" sizes="16x16">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
<div class="logo">
	<div class="logo-content">
		<div class="ikony">
		<a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
		<a href="https://twitter.com/?lang=pl" target="_blank" class="fa fa-twitter"></a>
		<a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
		<img src="img/logoitp.png">
		<div class="login">
				<h2>Witam <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
				<button onclick="location.href='logout.php'" type="button">WYLOGUJ</button>
		</div>
		</div>
	</div>
</div>
	
	<div class="nav"><div class="navcontent">
		<div class="button"><a href="index.php"><h2>STRONA GŁÓWNA</h2></a></div>
		<div class="button menu"><a href="menu.php"><h2>MENU</h2></a>
			<div class="menu-content">
				<a href="main_course.php">DANIA GŁÓWNE</a>
				<a href="pizza.php">PIZZE</a>
				<a href="pasta.php">MAKARONY</a>
			</div>
		</div>
		<div class="button"><a href="gallery.php"><h2>GALERIA</h2></a></div>
		<div class="button"><a href="info.php"><h2>KONTAKT</h2></a></div>
	</div></div>


<div class="content">
	<div class="tlo_tekstu">
		<h1>Makarony</h1>
		<div class="produkt-lewo">
			<div class="produkt-pic p1"></div>
			<div class="produkt-desc">
				<h3>SPAGHETII BOLOGNESE</h3>
				<hr><br>
				<span>wołowina, sos pomidorowy, parmezan</span>
			</div>
		</div>
		<div class="produkt-prawo">
			<div class="produkt-pic p2"></div>
			<div class="produkt-desc">
				<h3 style="margin-bottom: 51px; padding-top: 17px;">PENNE PESTO</h3>
				<hr><br>
				<span>pesto, suszone pomidory, pomidorki koktajlowe, mozzarella, parmezan</span>
			</div>
		</div>
		<div class="produkt-lewo">
			<div class="produkt-pic p3"></div>
			<div class="produkt-desc">
				<h3>TAGLIATELLE FORMAGGIO</h3>
				<hr><br>
				<sapn>ser gorgonzola, śmietana, kurczak, cebula, parmezan</span>
			</div>
		</div>
		<div class="produkt-prawo">
			<div class="produkt-pic p4"></div>
			<div class="produkt-desc">
				<h3>SPAGHETII CARBONARA</h3>
				<hr><br>
				<span>boczek, śmietana, czosnek, jajko, natka pietruszki, parmezan</span>
			</div>
		</div>
		<div class="clear"></div>

	</div>
</div>



<div class="footer">
	<div class="footercontent">
		Piotr Wojcieszak<br>	
	<a href="https://pl.freepik.com/darmowe-zdjecie-wektory/tło">Tło wektory designed by Sergey_kandakov - Freepik.com</a>
	</div>
</div>


</body>
</html>


