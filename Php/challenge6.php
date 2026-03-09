<?php 

### Master basic function definition and calling.

# The Personalized Greeting (Parameters)
function greetUser (string $name) {
   echo "Hello $name ! Ready to code?";
}
greetUser("Lahbib");


# The Calculation Engine (Return Values)
function calculateArea  (int $width, int $height) {
  return $width / $height;
}
$total = calculateArea(10,2);
echo"The total area is $total square units.";

# The Logic Gatekeeper (Boolean Return)
function isAdult (int  $age ){
  if ( $age > 18){
    return true;
  }else{
    return false;
  }
}

$age = 17;

if ( $age > 18){
    echo"Access Granted";
}else{
    echo"Access Denied.";
}

isAdult(11);


# The "Safe" Multiplier (Logic Guarding)
function multiplyNumbers($a, $b){
  if (is_numeric($a) && is_numeric($b)){
    return $a * $b;
  }else{
    return "Error: Invalid Input.";
  }
}

echo multiplyNumbers(2,12);
echo"\n" ; 
echo multiplyNumbers(3,"one");


# The Text Flipper (Algorithmic Synthesis)
function manualReverse($text){
    for ($i = strlen($text) - 1; $i >= 0; $i--) {
      echo $text[$i];
    }
}

$text = "Hey ! \n";
echo manualReverse($text);


?>
