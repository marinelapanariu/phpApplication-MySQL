
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
	<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5eb27b2d4ba4f9001384cbd7&product=inline-share-buttons" async="async"></script>
        </head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><strong><a href="index.html">Starry Eye Graphics</a></strong></h1>
				<nav id="nav">
					<ul>
					
                                                <li><a href="index.php">Home</a></li>
						
                                                <li><a href="gallery.php">Gallery</a></li>
						 
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Banner -->
			<section id="banner">
                            <div class="container">
		<ul class="staff"><li><img src="images/4.jpg" alt="" /></li></ul>
                            </div>
				<h2>Starry Eye Graphics</h2>
				<p>Need a cover for your book or just something to<br /> step up your game? You're in the right place.</p>
				<ul class="actions">
                                    
                                    <li><a href="login.php" class="button special big">Log in</a></li>
                                    <li><a href="signin.php" class="button default big">sign in</a></li>
				
                                </ul>
			</section>

			<!-- One -->
				<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
									<h2>Why choose US?</h2>
									<p>Be prepared to be amazed!</p>
                                                                        <ul class="staff">
                                                                            <li><img src="images/6.jpg" alt="" /></li>
			                                                </ul>
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
								<p>It all started five years ago when the project "Starry Eye" was born, from a lot of creativity and the wish of helping others with their vision of a product.</p>
								<p>Have you ever had an idea but you couldn't figure it out how to make it look amazing?Well, you arrived in the right place, cause we turn dreams to reality, even if it's your wedding pictures, a cool insta post or just a cover for your fantasy or action book.</p>
							 <ul class="staff">
                                                                        <li><img src="images/pic09.png" alt="" /></li>
			                                                </ul>
                                                        </div>
						</div>
					</div>
				</section>

			<!-- Two -->
				<section id="two" class="wrapper style2 special">
					<div class="container">
						<header class="major">
							<h2>Tutorials for begginers!</h2>
							
						</header>
						<div class="row 150%">
							<div class="6u 12u$(xsmall)">
								<div class="image fit captioned">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/sN77ty5eEa8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<h3>Add effects on pics</h3>
								</div>
							</div>
							<div class="6u$ 12u$(xsmall)">
								<div class="image fit captioned">
<iframe width="560" height="315" src="https://www.youtube.com/embed/WTUFisZdoI0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<h3>Glow effect Tutorial</h3>
								</div>
							</div>
						</div>
						
                                            
					</div>
                                    <div class="sharethis-inline-share-buttons"></div>
				</section>

			<!-- Three -->
				<section id="three" class="wrapper style1">
					<div class="container">
						<header class="major special">
							<h2>Types of edits</h2>
							<p>Requesting the right thing!</p>
						</header>
						<div class="feature-grid">
							<div class="feature">
								<div class="image rounded"><img src="images/1.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Instagram Ready</h4>
									                        <p>Basic editing</p>                                                     
                                                                              <?php
                                                                            class edits1 {
                                                                              // Properties
                                                                              public $level;
                                                                              public $price;

                                                                              // Methods
                                                                              function set_level($level) {
                                                                                $this->level = $level;
                                                                              }
                                                                              function get_level() {
                                                                                return $this->level;
                                                                              }
                                                                              function set_price($price){
                                                                                 $this->price = $price;
                                                                              }
                                                                              function get_price(){
                                                                                return $this->price;
                                                                              }
                                                                            }

                                                                            $Converse = new edits1();
                                                                            $Converse->set_level('Low/Medium');
                                                                            $Converse->set_price('15-20$');
                                                                            echo "LEVEL: " . $Converse->get_level();
                                                                            echo "<br>";
                                                                            echo "PRICE " . $Converse->get_price();
                                                                            ?>


									</header>
									
								</div>
							</div>
                                                    
							<div class="feature">
								<div class="image rounded"><img src="images/5.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Bussines Projects</h4>
										<p>Promote your small bussines in a BOMB way!</p>
                                                                                
									</header>
									<?php
                                                                            class edits2 {
                                                                              // Properties
                                                                              public $level;
                                                                              public $price;

                                                                              // Methods
                                                                              function set_level($level) {
                                                                                $this->level = $level;
                                                                              }
                                                                              function get_level() {
                                                                                return $this->level;
                                                                              }
                                                                              function set_price($price){
                                                                                 $this->price = $price;
                                                                              }
                                                                              function get_price(){
                                                                                return $this->price;
                                                                              }
                                                                            }

                                                                            $Converse = new edits2();
                                                                            $Converse->set_level('Medium');
                                                                            $Converse->set_price('40-65$');
                                                                            echo "LEVEL: " . $Converse->get_level();
                                                                            echo "<br>";
                                                                            echo "PRICE " . $Converse->get_price();
                                                                            ?>


								</div>
							</div>
                                                    
							<div class="feature">
								<div class="image rounded"><img src="images/3.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Photography Collabs</h4>
										<p>Dream team here we come!</p>
									</header>
									<?php
                                                                            class edits3 {
                                                                              // Properties
                                                                              public $level;
                                                                              public $price;

                                                                              // Methods
                                                                              function set_level($level) {
                                                                                $this->level = $level;
                                                                              }
                                                                              function get_level() {
                                                                                return $this->level;
                                                                              }
                                                                              function set_price($price){
                                                                                 $this->price = $price;
                                                                              }
                                                                              function get_price(){
                                                                                return $this->price;
                                                                              }
                                                                            }

                                                                            $Converse = new edits3();
                                                                            $Converse->set_level('Low/Medium');
                                                                            $Converse->set_price('80$');
                                                                            echo "LEVEL: " . $Converse->get_level();
                                                                            echo "<br>";
                                                                            echo "PRICE " . $Converse->get_price();
                                                                            ?>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/2.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Fantasy World</h4>
										<p>Give your readers the best book covers!</p>
									</header>
									<?php
                                                                            class edits4 {
                                                                              // Properties
                                                                              public $level;
                                                                              public $price;

                                                                              // Methods
                                                                              function set_level($level) {
                                                                                $this->level = $level;
                                                                              }
                                                                              function get_level() {
                                                                                return $this->level;
                                                                              }
                                                                              function set_price($price){
                                                                                 $this->price = $price;
                                                                              }
                                                                              function get_price(){
                                                                                return $this->price;
                                                                              }
                                                                            }

                                                                            $Converse = new edits4();
                                                                            $Converse->set_level('Medium/High');
                                                                            $Converse->set_price('120-200$');
                                                                            echo "LEVEL: " . $Converse->get_level();
                                                                            echo "<br>";
                                                                            echo "PRICE " . $Converse->get_price();
                                                                            ?>
								</div>
							</div>
						</div>
					</div>
				</section>
                        <!--MAP-->
                        <div id="middle">
                        <div id="goomap">
                            
<!--map start-->    

<!--Positions map in page -->
 <div id="middlecontent">
                            <h2>Contact Us!</h2>
                                <p>
                                
                                 <!--LIKE&SHAREBUTTONS-->
                                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%2FLUCKYGRAPHICS%2Findex.php&layout=button_count&size=large&width=88&height=28&appId" width="88" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                <br>
                                 <div class="6u$ 12u$(xsmall)">
									<ul class="icons">
										
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
										<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
										<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
									</ul>

								</div>
                                Please give us an email if you<br>
                                want to request something!<br>
                                The adress is starryeyegraphicsstudios@gmail.com<br>
                                We will reply as soon as we can!<br>
                                Make sure to create an account first for 10%off your purchase.<br>
                            </div>
                            </div>
                               <iframe width="425" height="330" float="right" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.17731475922!2d27.56991761501823!3d47.173964825757736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sUniversitatea%20Alexandru%20Ioan%20Cuza%20din%20Ia%C8%99i!5e0!3m2!1sro!2sro!4v1588181340168!5m2!1sro!2sro" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<!--map end-->
                            </div>
                        
                           
                             <!--COOKIES-->
                                  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-034427a3-b298-4b3c-9234-cc938e8f813a"></div>
                                  <!--END OF COOKIES-->
                        
                        
			
                                  <!-- Four -->
				<section id="four" class="wrapper style3 special">
					<div class="container">
						<header class="major">
							<h2>Follow us on social-media!</h2>
							<p>Sign up get a 10% discount on your first purchase!</p>
                                                        <>
						</header>
						
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