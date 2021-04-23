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

            <!--COOKIES-->
                                  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-034427a3-b298-4b3c-9234-cc938e8f813a"></div>
                                  <!--END OF COOKIES-->
		<!-- Header -->
			<header id="header">
				<h1><strong><a href="index.html">Starry Eye Graphics</a></strong></h1>
				<nav id="nav">
					<ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="gallery1.php">Gallery</a></li>
						<li><a href="index.php">Log Out</a></li>
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<header class="major special">
						<h2>Gallery</h2>
						<p>See our latest  work here!</p>
					</header>

                                    <div class="container">
                                        
    <p>Do you wonder how many people are requesting from our website? Here you have it!</p>
                                                                         <?php
                                                                           class request {
                                                                              // Properties
                                                                              public $year;
                                                                              public $type_1;
                                                                              public $type_2;
                                                                              public $type_3;
                                                                              public $type_4;

                                                                              // Methods
                                                                              function set_year($year) {
                                                                                $this->year = $year;
                                                                              }
                                                                              function get_year() {
                                                                                return $this->year;
                                                                              }
                                                                              function set_type_1($type_1){
                                                                                 $this->type_1 = $type_1;
                                                                              }
                                                                              function get_type_1(){
                                                                                return $this->type_1;
                                                                              }
                                                                              
                                                                               function set_type_2($type_2){
                                                                                 $this->type_2 = $type_2;
                                                                              }
                                                                              function get_type_2(){
                                                                                return $this->type_2;
                                                                              }
                                                                              
                                                                               function set_type_3($type_3){
                                                                                 $this->type_3 = $type_3;
                                                                              }
                                                                              function get_type_3(){
                                                                                return $this->type_3;
                                                                              }
                                                                              
                                                                               function set_type_4($type_4){
                                                                                 $this->type_4 = $type_4;
                                                                              }
                                                                              function get_type_4(){
                                                                                return $this->type_4;
                                                                              }
                                                                              
                                                                            }

                                                                            $Converse = new request();
                                                                            $Converse->set_year('2019-2020');
                                                                            $Converse->set_type_1('Instagram Ready: 533 ');
                                                                            $Converse->set_type_2('Bussines projects: 60');
                                                                            $Converse->set_type_3('Photography collabs: 130');
                                                                            $Converse->set_type_4('Fantasy world: 67');
                                                                            echo "YEAR:" . $Converse->get_year();
                                                                            echo "<br>";
                                                                            echo "#1 " . $Converse->get_type_1();
                                                                            echo "<br>";
                                                                            echo "#2 " . $Converse->get_type_2();
                                                                            echo "<br>";
                                                                            echo "#3 " . $Converse->get_type_3();
                                                                            echo "<br>";
                                                                            echo "#4 " . $Converse->get_type_4();
                                                                            
                                                                            ?>
                            </div>

                                                                    

                                    
                                    
                                    
                                    <section class="gallery-links">
                                                            <div class="wrapper">
                                                                
                                                                <div class="gallery-container">
                                                                   <?php
                                                                include 'connection.php';
                                                                $sql='SELECT * FROM images';
                                                                $query=  mysqli_query($con, $sql)or die(mysqli_error($con));
                                                                ?>
                                                                    <?php while($row=mysqli_fetch_array($query)){ ?>
                                                                        <div><img src="<?php echo $row['image'];?>" width="40%"></div>
                                                                    <h3><?php echo $row['title'];?></h3>
                                                                    <p><?php echo "<a href=\"view.php?id=".$row['id']."\">View</a> <a href=\"edit.php?id=".$row['id']."\">Edit</a> 
<a href=\"delete.php?id=".$row['id']."\" onclick=\"return confirm('Are you sure?')\">Delete</a>"?>
                                                                    </p>
                                                                    <?php } ?>
                                                                   <?php echo "<a href=\"upload.php"."\">Upload</a>" ?> 
                                                                </div>
                                                                </div>
                                     </section>
                                    
                                    
                                    <!--AUDIO MP3 PLAYER-->
                                    
                                    <p>Audio for my gallery!</p>
                                    <audio controls>
                                        <source src="jaden.mp3" type="audio/mpeg">
                                    </audio>
                                    
                                    <video width="400" controls>
  <source src="Reborn.mp4" type="video/mp4">
  <source src="Reborn.ogg" type="video/ogg">
  
</video>
                                    
					
						
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