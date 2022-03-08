<?php 
$users = [
    "admin" => "adminpass"
];
session_start();

  if(isset($_POST['username']) && !isset($_SESSION['username'])){ 
      if($users[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
      }
    if(!isset($_SESSION['username'])) { $failed = TRUE; }
    }else{
        if(isset($_SESSION['username'])){
            header("Location: create.php");
            exit();
    }
}
?>