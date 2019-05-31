<?php
$id = $_GET["id"];
$nfc = $_GET["nfc"];
echo 'ok:'.$id.','.$nfc;
$con = mysqli_connect('localhost','root','12345678','ryaniot');
if($con){
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_query($con,"SET NAMES utf8");
mysqli_query($con,"UPDATE sensors SET nfc ="."'".$nfc."'".'WHERE id ='."'".$id."'");
mysqli_close($con);
?>
