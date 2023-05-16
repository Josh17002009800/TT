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
<span>Sales</span>
 
 <!-- main -->
      <div class="box1" > 
      
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Transac ID</th>
            <th scope="col">Status</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
    <?php
    #this is what you need to output result

    $sql ='select * from sales;';
    $view_sales = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($view_sales)){
            $transac_id = $row['transac_id'];
            $status = $row['status'];
            $description = $row['description'];
            
            echo"<tr>";
            echo"<th>{$transac_id}</th>";
            echo"<th>{$status}</th>";
            echo"<th>{$description}</th>";
            echo"</tr>";
        }
    
    ?>

</tbody>
</table>    
      </div>

      <?php
if(isset($_POST['create']))
{
    $status =  $_POST['status'];
    $description =  $_POST['description'];

    $query = "INSERT INTO sales (status,description) VALUES ('$status','$description')";
    $add_sales = mysqli_query($conn,$query); 

    if(!$add_sales){
        echo "<script type= 'text/javascript'> alert('something went wrong!')</script>". mysqli_error($conn);
    }
    else {
        echo "<script type='text/javascript'>alert('user added successfully!')</script>";
    }
    echo "<meta http-equiv='refresh' content='0'>";

}
?>
      <!-- space :) -->
          <div class="box2" >
   
  <form action="sales.php" method="POST">
  <div class="form-row" >

    <div class="dot"> <!-- pending this is not final for status -->
    <div class="form-group col-md-3">
      <label for="status">status</label>
      <input type="status" class="form-control" name="status" id="status" placeholder="status" >
    </div>
  </div>
  <div class="zero">
    <div class="form-group col-md-3">
      <label for="description">description</label>
      <input type="description" class="form-control" name="description" id="description" placeholder="description">
    </div>
    </div>
    
  </div>
  <input type="submit" name="create" class="btn btn-primary" id="submit" value="submit">
  </div>
</form>

</div>
</body>
</html>