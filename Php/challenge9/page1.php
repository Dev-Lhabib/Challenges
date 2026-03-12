<?php 
session_start();

if (isset($_POST["next"])){
  if (!empty($_POST["user"])){
    $_SESSION["user"] = $_POST["user"];
    header("location: page2.php");
    exit;
  }else{
    echo"Enter your name!";
  }
}
?>

<form action="" method="post">
  Username:<br>
  <input type="text" name="user" id="">
  <input type="submit" value = "Next" name="next">
</form>


