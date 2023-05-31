<?php
require 'nav.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="orders.css">
    <title>orders</title>
</head>
<body>

<div class="box1">
<table class="table">
    
<thead >
<tr>
    <th>order id</th>
    <th>order name</th>
    <th>qty</th>
    <th>datetime</th>
    <th>status</th>
    <th>description</th>
    <th>customer id</th>
    <th>customer name</th>
    <th>price</th>
</tr>

</thead>
<tbody>

<?php
    #this is what you need to output result

    $sql ='select * from orders INNER JOIN sales ON order_id = transac_id ;';
    $view_sales = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($view_sales)){
          $order_id = $row['order_id'];
          $order_name = $row['order_name'];
          $qty = $row['qty'];
          $datetime = $row['datetime'];
          $status = $row['status'];
          $description = $row['description']; 
            
          echo"<tr>";
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

<div class="pages">

</div>


</body>
</html>
