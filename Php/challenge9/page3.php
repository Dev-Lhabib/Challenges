<?php
session_start();
$user = $_SESSION["user"];
$language = $_SESSION["language"];
echo "Hello  $user , you love  $language !";
?>
