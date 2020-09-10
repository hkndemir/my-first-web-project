<?php 

$conn = mysqli_connect("localhost", "root", "", "hulorix");
$ad=$_GET['ide'];


$sil="delete  from urunler where ide=".$ad."";
$kont=mysqli_query($conn,$sil);


if($kont){

  echo "true";
 }
  else{
     echo "false";
 }



?>