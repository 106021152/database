<?php
$id = $_GET["id"];
echo 'ok:'.$id;
$con = mysqli_connect('localhost','root','12345678','ryaniot');
if($con){
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_query($con,"SET NAMES utf8");
mysqli_query($con,"DELETE FROM sensors WHERE id="."'".$id."'");
mysqli_close($con);
?>