<?php 
require_once("connect_db.php");

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $name   = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $phone  = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
    $book_name = filter_var($_POST['book_name'],FILTER_SANITIZE_STRING);
    $quantity = filter_var($_POST['quantity'],FILTER_SANITIZE_NUMBER_INT);
    
    global $con;
    $stmt = $con->prepare("INSERT INTO form (name,phone,book_name,quantity) value(?,?,?,?)");
    $stmt->execute(array($name,$phone,$book_name,$quantity));

    
  
  }
?>

