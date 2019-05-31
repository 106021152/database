<?php
$id = $_GET["id"];
$con = mysqli_connect('localhost','root','12345678','ryaniot');
if(!$con){
    die('Could not connect: '.mysqli_error($con));
}
mysqli_select_db($con,"ryaniot");
mysqli_query($con,"SET NAMES utf8");
$sql = "SELECT * FROM sensors WHERE id = '".id."'";
echo 'sql:'.$sql."<br>";
$result =  mysqli_query($con,$sql);
$my0bj=array();
while ($row = $result->fetch_assoc()){
    $my0bj2 = array('id'  => $row ['id'], 'nfc' =>$row['nfc']);
    array_push($my0bj,$my0bj2);
    echo $row['nfc']."<br>";
}
$myJSON = json_encode($my0bj,JSON_UNESCAPED_UNICODE);
echo $myJSON;
$myfile = fopen("YD3.php","w") or die("Unable to open file!");
fwrite($myfile,$myJSON);
fclose($myfile);
mysqli_close($con);
?>

