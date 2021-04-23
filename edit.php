<!DOCTYPE HTML>
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
                                                if(!isset($_POST["submit"])){
                                        $sql="SELECT * FROM images WHERE ID='{$_GET['id']}'";
                                                    $result=mysqli_query($con, $sql);
                                                    $record=  mysqli_fetch_array($result);
                                                }else{
                                         $sql2="SELECT * FROM images WHERE ID='{$_POST['id']}'"; 
                                                   $result2=mysqli_query($con, $sql2);
                                                    $rec=  mysqli_fetch_array($result2);
                                                    $title=$_POST['title'];
                                                   if(isset($_POST['image'])){
                                                   $target="./images/".basename($_FILES['image']['name']);
                                                   echo $target;
                                                   }else{
                                                   $target=$rec['image'];
                                                   echo $target;
                                                   }
                                        $sql1="UPDATE images SET title='{$title}', image='{$target}' WHERE id='{$_POST['id']}'";
                                                   mysqli_query($con, $sql1) or die(mysqli_error($con));
                                                   move_uploaded_file($_FILES['image']['tmp_name'],$target);
                                                  header('Location:gallery1.php');

                                                }
                                        }else{
                                            header("Location:login.php");
                                        }
                                        ?>
                                        <h1>Editati inregistrarea:</h1>
                                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
                                            Titlu:<br/><input type="text" name="title" value="<?php echo $record['title'] ;?>"/><br/>
                                            Image: <br/><input type="file" name="image" value="<?php echo $record['image'] ;?>"><br/>
                                            <img src="<?php echo $record['image'] ;?>" width="50%"><br/>
                                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
                                            <input type="submit" name="submit" value="Edit"/>
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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>