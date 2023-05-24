<?php
require 'nav.php';
require 'ads/cons.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sales.css">
    <title>Document</title>
</head>
<body>
  <DIV class="name">
 <span>SALES</span>
 </DIV>
  <a href="salesadd.php" class="add">Add Test<i class="bi bi-plus-square-dotted"></i></a>
 <!-- main -->
      <div class="box1" > 
      
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Transac ID</th>
            <!-- <th scope="col">Product Id</th> -->
            <th scope="col">order id</th>
            <!-- <th scope="col">User id</th> -->
            <!-- <th scope="col">User Name</th> -->
            <!-- <th scope="col">Product name</th> -->
            <th scope="col">order name</th>
            <th scope="col">quantity</th>
            <th scope="col">Date & Time</th>
            <th scope="col">Status</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
    <?php
    #this is what you need to output result

    $sql ='select * from sales INNER JOIN orders ON transac_id = order_id ;';
    $view_sales = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($view_sales)){
          $transac_id = $row['transac_id'];
          $order_id = $row['order_id'];
          $order_name = $row['order_name'];
          $qty = $row['qty'];
          $datetime = $row['datetime'];
          $status = $row['status'];
          $description = $row['description']; 
            
          echo"<tr>";
          echo"<th>{$transac_id}</th>";
          echo"<th>{$order_id}</th>";
          echo"<th>{$order_name}</th>";
          echo"<th>{$qty}</th>";
          echo"<th>{$datetime}</th>";
          echo"<th>{$status}</th>";
          echo"<th>{$description}</th>";
          echo"</tr>";
        }
    
    ?>

</tbody>
</table>    
      </div>


      <!-- space :) -->
         


</body>
</html>
