<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Starry Eye Graphics</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="index.html">Starry Eye Graphics</a></strong></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			
                                    
                       <?php 
                       session_start();
                       if(isset($_SESSION["username"])){

                       //include connection file
                       include "connection.php";


                       $sql1="SELECT * FROM images WHERE id='{$_GET['id']}'";
                       $query=mysqli_query($con, $sql1)or die(mysqli_error($con));

                       $row=mysqli_fetch_array($query);

                       unlink($row["image"]);

                       $sql2="DELETE FROM images WHERE id='{$_GET['id']}'";
                       $query=mysqli_query($con, $sql2)or die(mysqli_error($con));

                       header('location:gallery1.php');
                       }else{
                           header("Location:login.php");
                       }
                       ?>	

		
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