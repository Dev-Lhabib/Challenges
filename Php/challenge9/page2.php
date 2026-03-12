<?php 
session_start();

if (isset($_POST["finish"])){
  if (!empty($_POST["language"])){
    $_SESSION["language"] = $_POST["language"];
    header("location: page3.php");
    exit;
  }else{
    echo"Enter your Favorite Programming Language!";
  }
}
?>

<form action="" method="post">
  Favorite Programming Language!:<br>
  <input type="text" name="language" id="">
  <input type="submit" value = "Finish" name="finish">
</form>