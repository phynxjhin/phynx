<?php  
   require_once('./dbconnector.php');
   if (isset($_POST['them'])) {
    $name=$_POST['name'];
    $price=$_POST['price'];
    $brand=$_POST['brand'];
    $sql="Insert Into toy1 (name, price, brand) values('".$name."','".$price."','".$brand."')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');
    } 
    else {
    $id=$_GET['id'];
    $sql="DELETE FROM staff1 WHERE id = $id";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:index.php'); 
    }
?>