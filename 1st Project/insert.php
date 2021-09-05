<?php 
  
	

$conn  = mysqli_connect('localhost', 'root', '', 'orderlist');

if (isset($_POST['submit'])) 
{


	if(!empty($_POST['ownersName']) && !empty($_POST['productName']) &&!empty($_POST['quantity']) &&!empty($_POST['price']))
	{
		

		$name = $_POST['ownersName'];
		$products = $_POST['productName'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];


		$query = "insert INTO orders(name,products,quantity,total) values ('$name','$products','$quantity','$price')";
		$run = mysqli_query($conn,$query) or die(mysqli_error());

		if($run)
		{
			echo "Form submitted successfully";
		}else
		{
			echo "Form not submitted successfully";
		}


	}else
	{
		echo "all fields required";
	}


}

 ?>
