<?php #test
require 'ads/cons.php';
require 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>Account</title>
</head>
<body>
<table>
<thead>
<tr>
    <th  scope="col">id</th>
    <th  scope="col">name</th>
    <th  scope="col">address</th>
    <th  scope="col">contact</th>
</tr>
</thead>
<tbody>
    <?php
    #this is what you need to output result

    $sql ='select * from accounts;';
    $result= mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $username = $row['username'];
            
            echo"<tr>";
            echo"<th>{$username}</th>";
            echo"</tr>";
        }
    }
    ?>

</tbody>
</table>    



<?php
if(isset($_POST['']))
{
    $username =  $_POST['username'];

    $query = "INSERT INTO accounts(username) Values ('$username')";
    $add_accounts = mysqli_query($conn,$query); 

    if(!$add_accounts){
        echo "<script type= 'text/javascript'> alert('something went wrong!')</script>". mysqli_error($conn);
    }
    else {
        echo "<script type='text/javascript'>alert('user added successfully!')</script>";
    }
}
?>


</body>
</html>


