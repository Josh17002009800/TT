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
    <title>sales</title>
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
            <th scope="col">control number</th>
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

    $sql ='select * from sales INNER JOIN orders ON control_number = order_id ;';
    $view_sales = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($view_sales)){
          $control_number = $row['control_number'];
          $order_id = $row['order_id'];
          $order_name = $row['order_name'];
          $qty = $row['qty'];
          $datetime = $row['datetime'];
          $status = $row['status'];
          $description = $row['description']; 
            
          echo"<tr>";
          echo"<th>{$control_number}</th>";
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

      <div class="page">
      <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">6</a></li>
    <li class="page-item"><a class="page-link" href="#">7</a></li>
    <li class="page-item"><a class="page-link" href="#">8</a></li>
    <li class="page-item"><a class="page-link" href="#">9</a></li>
    <li class="page-item"><a class="page-link" href="#">10</a></li>
    <li class="page-item"><a class="page-link" href="#">11</a></li>
    <li class="page-item"><a class="page-link" href="#">12</a></li>
    <li class="page-item"><a class="page-link" href="#">13</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>
</body>
</html>
