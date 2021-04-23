<?php include 'connection.php';?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Starry Eyes Graphics</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="index.html">Starry Eyes Graphics</a></strong></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="gallery1.html">Gallery</a></li>
						
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			

                    <div id="main">
                                <section>
					 <div id="content">
                                           <form method="post" action="save.php" enctype="multipart/form-data">
                                                <input type="hidden" name="size" value="1000000">
                                            <div>
                                                <input type="file" name="image">
                                            </div>
                                            <div>
                                                <textarea name="text" cols="40" rows="4" placeholder=""></textarea>
                                            </div>
                                            <div>
                                                <input type="submit" name="upload" value="Upload Image">
                                            </div>
                                            </form>
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>