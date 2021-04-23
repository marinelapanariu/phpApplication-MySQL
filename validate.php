<html>
		
	<head>
            <title>Account validation</title>
                <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
        <body>
            	

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

                        
                        
		<!-- Main -->
           <div class="validatebox">
<?php
$myname="bogdan";
$mypass="bog";
 function died($error){
    echo "We are very sorry, but there were error(s) found with the form you submitted.";
    echo "There errors appear below.<br/><br/>";
    echo $error."<br/><br/>";
    echo "Please go back and fix these errors.<br/><br/>";
    die();
    }
if(isset($_POST['login'])){
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $captcha=$_POST['captcha'];
    $correctsum=$_POST['correctsum'];
    if($name==$myname and $pass=$mypass){
        if($captcha==$correctsum){
        $rem=$_POST['remember'];
        if(isset($_POST['remember'])){
            setcookie('name', $name()+60*60*24*365);
            setcookie('pass', $pass, time()+60*60*24*365);
        } 
        session_start();
        $_SESSION['username']=$name;
        header("location:user.php");
        }
        }else{
            echo "Username or password or the number for captcha is incorrect.<br> Click here to <a href='login.php'> try again </a>";
        }
        }else{
            header("location: login.php");
        }
?>
            </div>
            </body>
</html>