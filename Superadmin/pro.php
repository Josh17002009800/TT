<?php 
include 'ads/cons.php';


if(isset($_POST['submit'])){
    if(!empty($_POST['product_name'])&& !empty($_POST['stock']) && !empty($_POST['price'])){
        $product_name = $_POST['product_name'];
        $stock = $_POST['stock'];
        $price = $_POST['price'];

        $query = "INSERT INTO inventory (product_name,stock,price) VALUES ('$product_name','$stock','$price')";
        $add_inventory = mysqli_query($conn,$query);



    if(!$add_inventory){
        echo 'this shit aint gonna happen';
        }
    }else{
        echo 'thank you! B*tch';
    }

}


?>
<title>test prototype</title>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<div class="col-md-4">
    <label for="product_name" class="form-label">ORDER ?</label>
        <input type="text" name="product_name" class="form-control" id="product_name">
           
 </div>
<div class="col-md-4">
    <label for="stock" class="form-label">Quantity</label>
        <input type="text" name="stock" class="form-control" id="stock">
           
 </div>
<div class="col-md-4">
    <label for="price" class="form-label">price</label>
        <input type="text" name="price" class="form-control" id="price">
           
 </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>
