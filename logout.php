<?php 
    $number1=rand(1,9);
    $number2=rand(1,9);
    $sum=$number1+$number2;
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Spectral</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="index.html">Spectral</a></strong></h1>
				<nav id="nav">
					<ul>
                                            <li><a href="index.php">Home</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
						
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			<?php $cookie_name1='username'; 
                        $cookie_name2='password'; 
                        unset($_COOKIE['username']);
                        unset($_COOKIE['password']);
                        setcookie($cookie_name1, '', time() - 3600); setcookie($cookie_name2, '', time() - 3600); 
                        header("Location:index.php"); ?>
 		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>