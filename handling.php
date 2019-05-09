<?php  
   require_once('dbconnector.php');
   if (isset($_POST['Add'])) {
    $name=$_POST['Name'];
    $price=$_POST['Price'];
    $brand=$_POST['Brand'];
    $sql="Insert Into toy (Name, Price, Brand) values('$Name','$Price','$Brand')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');
    } 
    else {
    $id=$_GET['id'];
    $sql="DELETE FROM toy WHERE id = $id";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:index.php'); 
    }
?>