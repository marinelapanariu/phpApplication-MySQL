<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Lucky Graphics</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="index.html">Lucky Graphics</a></strong></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="gallery1.html">Gallery</a></li>
						
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			
                                    <div id="main">
                                            <section>
					 <?php 
                                            session_start();
                                            if(isset($_SESSION["username"])){
                                                   //include connection file
                                                    $con=mysqli_connect('localhost','root','','maindb')or die("Failed to connect:".mysqli_error($con));
                                                    $sql="SELECT * FROM images WHERE ID='{$_GET['id']}'";
                                                    $query=  mysqli_query($con,$sql)or die(mysqli_error($con));
                                                    $row=mysqli_fetch_array($query);
                                                         echo "Nume: ".$row["title"]."<br/>";
                                                         echo "Imagine: <img src=".$row['image']." width='100%'><br/><br/>"; 
                                                         
                                            }else{
                                                header("Location:login.php");
                                            }
                                            ?>
                                            <a href="gallery1.php">Back</a>
                                            </section>
                                        </div>
                                  
                                    
                                    
					
						
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