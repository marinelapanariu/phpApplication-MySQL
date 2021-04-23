<?php 
    $number1=rand(1,9);
    $number2=rand(1,9);
    $sum=$number1+$number2;
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Starry Eye GRAPHICS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="index.html">Starry Eye GRAPHICS</a></strong></h1>
				<nav id="nav">
					<ul>
                                            <li><a href="index.php">Home</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
						
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container"

					<header class="major special">
						<h2>Welcome back!</h2>
						<p>We're so glad you're back here. Hope you you're doing well!</p>
					</header>

					<!-- Form -->
						<section>
							
							<form method="post" action="validate.php">
								<div class="row uniform 50%">
                                                                    
									<div class="6u 12u$(xsmall)">
                                                                            <label for="username">Username:</label>
										<input type="text" name="username" id="name" value="" placeholder="Username" />     
									</div>
                                                                         
                                                                    <div class="6u 12u$(xsmall)">
                                                                        <label for="password">Password:</label>
                                                                        <input type="password" id="pwd" name="password" minlength="8" placeholder="Password">
                                                                                
									</div>
                                                                    <div class="6u 12u$(xsmall)">
                                                                        <label for="password">Captcha:</label>
                                                                            <input type="hidden" name="correctsum" value="<?php echo $sum;?>"/>
                                                                            <?php echo $number1.'+'.$number2.'=';?><br/><input type="text" name="captcha"/>
                                                                    </div>                                                                 
                                                                    
									<div class="6u$ 12u$(small)">
										<input type="checkbox" id="human" name="human" unchecked>
										<label for="human">I am a human and not a robot</label>
									</div>
                                                                      
                                                                    <p>Remember me</p>
                                                                            <input type="checkbox" name="remember" value="1" unchecked>
                                                                            <br/><br/> 
                                                                            <br/><br/>
                                                                            <input type="submit" value="Login" name="login" class="btn-login"/>
                                                                    
                                                                            
									</div>
                                                                    
								</div>
							</form>
						</section>

				</div>
			</section>

                
                
 

   

                
                
                
                
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