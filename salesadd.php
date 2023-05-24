
<?php
# this will be sent to the db
if(isset($_POST['create']))
{
  $datetime = $_POST['datetime'];
    $status =  $_POST['status'];
    $description =  $_POST['description'];

    $query = "INSERT INTO sales (datetime,status,description) VALUES ('$datetime','$status','$description')";
    $add_sales = mysqli_query($conn,$query); 

    if(!$add_sales){
        echo "<script type= 'text/javascript'> alert('something went wrong!')</script>". mysqli_error($conn);
    }
    else{
        echo "<script type='text/javascript'>alert('user added successfully!')</script>";
    }
    echo "<meta http-equiv='refresh' content='0'>";

}
?>
 <div class="box2" >
           
           <form action="sales.php" method="POST" class="row g-3">
           <div class="form-row" >
              <div class="p-3 container justify-content-evenly " >
         
           <div class="col-md-4">
             <label for="status" class="form-label">status</label>
             <input type="text" name="status" class="form-control" id="inputEmail4">
           </div>
           
           <div class="col-md-4">
             <label for="description" class="form-label">description</label>
             <input type="text" name="description" class="form-control" id="inputEmail4">
           </div>
         
           </div>
           <!-- end -->
         <div class="form-row">
           <label for="datetime">Date & Time</label>
           <input type="datetime-local" name="datetime" class="form-control">
         </div>
         
         
         
         
         
           <div class="col-md-4">
           <input type="submit" name="create" class="btn btn-primary" id="submit" value="submit" >
           </div>
         </form>
         </div>
         