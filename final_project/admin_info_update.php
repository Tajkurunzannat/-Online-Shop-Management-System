<?php
include "includes/db_connect.inc.php";
   // $_POST['admin_name'] = $new_name;
   if(isset($_POST['update']))
{
	$hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "elegance_ecommerce";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
   $admin_name= $_POST['admin_name'];
   $admin_email= $_POST['admin_email'];
   $admin_pass= $_POST['admin_pass'];
   
   //$admin_id = $admin_name = $admin_email = $admin_pass = $err = $adEmailInDB = $message= "" ;
   
   //$admin_id = $admin_name = $admin_email = "";
   
    $AdUpdateSQL = "UPDATE 'admin_info' SET $_POST['admin_name']=$admin_name, $_POST['admin_email']=$admin_email,$_POST['admin_pass']= $admin_pass WHERE 'admin_id' = $admin_id";
   
   $AdUpdateRes = mysqli_query($connect, $AdUpdateSQL);
   
   if($AdUpdateRes)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}
  

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
    
	<form action="admin_homepage.php" method="post">
      <fieldset>
	<h2>Update Your Information Here: </h2>
	<label for="admin_name">Name: </label>
        <input type="text" name="admin_name" value="" required><br>
		<label for="admin_email">Email: </label>
        <input type="text" name="admin_email" value="" required><br>
        <label for="admin_pass">Password: </label>
        <input type="password" name="admin_pass" value="" required><br>
        <button type="submit" name="update">Update</button>
	</fieldset>
    </form>
  </body>
</html>