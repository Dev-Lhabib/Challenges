<?php
$name = "";
$email = "";
$message = "";

$nameError = "";
$emailError = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  if (empty($_POST["name"])){
    $nameError = "Enter a name !";
  }else{
    $name = $_POST["name"];
  }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (empty($_POST['email'])){
    $emailError = "Email is required !";
  }else {
    $email = $_POST["email"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $emailError = "Invalid Email !";
    }
  }
  $message = $_POST["message"] ?? "";

  // If emial is valid empty field 
  if ($nameError === "" && $emailError === "") {
    $email = "";
    $message = "";
  }
}
?>

<h1>Contact form</h1>
<form method="POST">
  <input type="text" name="name" placeholder="Your name here" value="<?php echo $name; ?>"><br><?php echo $nameError; ?><br><br>
  <input type="text" name="email" placeholder="Your email here" value="<?php echo $email; ?>"><br><?php echo $emailError; ?><br><br>
  <textarea type="text" name="message" placeholder="Your message here"><?php echo $message; ?></textarea><br><br>
  <button type="submit">Send</button>
</form>