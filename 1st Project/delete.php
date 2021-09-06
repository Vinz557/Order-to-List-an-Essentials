<?php 

$conn = mysqli_connect('localhost', 'root', '', 'orderlist');

error_reporting(0);

$idnumber = $_POST['idnumber'];
$query = "DELETE FROM `orders` WHERE id = $idnumber";

$data = mysqli_query($conn,$query);



if($data )
{
	header('location: du.php');
	echo "Record Delete From database";
}else
header('location: du.php');


?>