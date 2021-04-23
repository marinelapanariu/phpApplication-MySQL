<?php 

require_once 'connection.php';
$sql1 ="DROP PROCEDURE IF EXISTS InsertImage";
$sql2 ="CREATE PROCEDURE InsertImage(
    IN var_title varchar(30),
    in var_img varchar(30),
   
    )
    BEGIN
        INSERT INTO images
        (title,image)
        VALUES (var_title,var_img);
       END;";
$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();

$sql3="DROP TRIGGER IF EXISTS BIT";
$sql4="CREATE TRIGGER BIT BEFORE INSERT ON images FOR EACH ROW
    BEGIN
        INSERT INTO images_updated(title,status,edtime)
        VALUES(NEW.title,'INSERTED',NOW());
       END;";
$stmt3=$con->prepare($sql3);
$stmt4=$con->prepare($sql4);
$stmt3->execute();
$stmt4->execute();

session_start();



if(isset($_SESSION["username"])){

    
    $msg="";
    if(isset($_POST['upload'])){
    $target="./images/". md5(uniqid(time())). basename($_FILES['image']['name']);
    $text=$_POST['text'];
        $sql5="CALL InsertImage('{$text}','{$target}')";
        $q=$con->query($sql5);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
       header('location:gallery1.php');
    }else{
        $msg="Ooopsy, something went wrong!";
    }
    }
}else{
    header("Location:login.php");
}
?>


