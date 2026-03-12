<?php 
session_start();

if(!isset($_SESSION["cart"])){
    $_SESSION["cart"] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $product = $_POST["product"];
  
  if (!in_array($product,$_SESSION["cart"])){
    $_SESSION['cart'][] = $product;
  }
  header("Location: challenge10.php");
  exit;
}

echo "Cart: " . count($_SESSION["cart"]) . " items";
?>
     
<h3>Products</h3>

<form method="POST">
  Laptop <br>
  <button name="product" value="Laptop">Add to cart</button> <br><br>
  USB <br>
  <button name="product" value="Usb">Add to cart</button> <br><br>
  Mouse <br>
  <button name="product" value="Mouse">Add to cart</button> <br><br>
</form>





