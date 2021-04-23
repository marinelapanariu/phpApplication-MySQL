<html>
	<head>
		<title>Welcome!</title>
		<meta charset="utf-8" />
	</head>
        <body>
            <style>
            body{
                margin: 0;
                padding: 0;
                background-size: cover;
                background-position: center;
                font-family: sans-serif;
                }
                .userbox{
                    width: 320px;
                    height: 420px;
                    background: url("paper12.jpg") ;
                    color: #fff;
                    top: 50%;
                    left: 50%;
                    position: absolute;
                    transform: translate(-50%,-50%);
                    box-sizing: border-box;
                    padding: 70px 30px;
                }
                h2{
                    margin: 0;
                    padding: 0 0 20px;
                    text-align: center;
                    font-size: 22px;
                }
                .userbox p{
                    margin: 0;
                    padding: 0;
                    font-weight: bold;
                }
                .userbox input{
                    width: 100%;
                    margin-bottom: 20px;
                }
              
     
            </style>
            <canvas></canvas>
            <div class="userbox">
                <h3>
                              <?php 
                                    echo "Welcome back! Where do you wanna go?".'<br/>'.'<br/>'.'<br/>'."Go to <a href='index.php'>Home</a>".'<br/>'."Go to <a href='gallery1.php'>Gallery</a>".'<br/>'." Wanna leave? <a href='logout.php'>Logout</a>.";

                                session_start();
                                if(isset($_SESSION["username"])){

                                }else{
                                    header("Location:index.php");
                                }
                                ?>
                </h3>
            </div>  
            <script src="assets/js/canvass.js"></script>
            </body>
  
</html>
