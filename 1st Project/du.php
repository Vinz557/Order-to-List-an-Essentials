
 <?php
       $conn  = mysqli_connect('localhost', 'root', '', 'orderlist');
       $query = "select * from orders ORDER BY id DESC";
       $result = mysqli_query($conn,$query);


if(isset($_POST['update']))
{
    $connUpdate = mysqli_connect('localhost', 'root', '', 'orderlist');
    $id = $_POST['id'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $queryUpdate= "UPDATE `orders` SET `products`='".$product."',`quantity`='".$quantity."',`total`= $price WHERE `id` = $id";
    $resultUpdate = mysqli_query($connUpdate,$queryUpdate);

    mysqli_close($connUpdate);

}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Delete and Update</title>
    <style type="text/css">
        
        .p{
            display: flex;
        }
        .c1{
            border-right: 2px #264d73;
            float: left;
            width: 35%;
            background-color: #264d73;
            color: white;
            padding-bottom: 50px;
           
        }
        .c2{
            float: right;
            width: 60%;
        }
        .d1{
            border: 2px solid #264d73;width: 70%;text-align: center;

        }
        .cs2{
        	background-color: #264d73;
        	color: white;
        	border: 2px solid black;width: 90%;text-align: center;
        }

        .topnav {
          
          background-color: black;
        }

        .topnav a {
          float: center;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }

        .topnav a:hover {
          background-color: black;
          color: white;
        }
        

    </style>

</head>

<body>
    <form action="" method="POST">
        <center>
            <div class="d1">

                <div class="topnav" style="margin-bottom: 0px; background-color:#204060">
                  
                  <a class="active" href="index.php">Home</a>
                  <a href="du.php">Update and Delete</a>
                  <a href="https://www.facebook.com/JLBADelivery">Contact</a>
                  
                </div>

                <section class="p">
                    <section class="c1">
                        <div >
                            <img src="1.jpg" width="327" height="190" style="margin-top:0px; margin-bottom: 0px"  style="border-radius: 60px" style="display: flex;">
                            
                                </div>
                                <hr><hr>
                                <h4>More Orders , More Freebies!!</h4>
                                <hr><hr>

                                <div style="text-align: left; margin-left: 5px; width: 250px  " class="cs2">
                                    
                                    <form action="du.php" method="POST">
                                        
                                        
                                            Owners Id to update<br> <input type="name" name="id" required=""> <br><br>

                                            Products Name eg.(chicken,meat,etc)<br> <input type="text" name="product"placeholder = "Update you bought" required=""> <br><br>

                                            Quantity<br> <input type="text" name="quantity"placeholder = "Update number of products" required=""><br><br>

                                            Total Price <br><input type="text" name="price" placeholder="Update price" required=""> <br><br>

                                        

                                            <button type="submit" name="update" value="update" value="refresh Page " onclick="refresh">Update</button>
                                    </form>
                                        
                                </div>
                            </section>

                            <section class="c2">

                            <h1 style="padding-top: 10%;text-align: left;margin-left: 15px;margin-top: 50px;font-size: 45px;color: #204060" >Essentials Orders List</h1>
                            <hr style="transition-delay: 30px;display: flex;">

                        <section style="text-align: left;margin-left: 10px; ">
                            
                            <h3 style="color: #204060; font-size: 25px; margin-top: -5px" > UPDATE TO CREATE MORE ORDERS</h3>
                            <hr>

                            <div>
                  
                               <table align="center" border="1px" style="width: 500px; line-height: 30px;background-color: #264d73;color: white">
                                   <tr>
                                       <th colspan="5" align="center">Costumer's Orders</th>

                                   </tr>

                                   <t>
                                        <th align="center">Id</th>
                                        <th align="center">Owners Name</th>
                                        <th align="center">Products</th>
                                        <th align="center">Quantity</th>
                                        <th align="center"> Total Price</th>
                                   </t>

                                   <?php
                                   

                                        while($rows=mysqli_fetch_assoc($result))
                                        {
                                    ?>   
                                            <tr>
                                                <td align="center"><?php echo $rows['id'] ?></td>
                                                <td align="center"><?php echo $rows['name'] ?></td>
                                                <td align="center"><?php echo $rows['products'] ?></td>
                                                <td align="center"><?php echo $rows['quantity'] ?></td>
                                                <td align="center"><?php echo $rows['total'] ?></td>
                                            </tr>     
                                     <?php       
                                        }

                                    ?>
                               </table>

                               
                           

                                
                            </div>
                                

                                

                          
                        </section>
                        

                        
                    </section>
                </section>
                    
                
                

            </div>
        </center>
    </form> 
</body>
   

</html>