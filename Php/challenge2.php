<?php
###  Building a ticketing system for a local event.

$age = 47;

if ($age < 12) {
  print "Special: Children's Menu included!";
}else if ($age >= 12 && $age <= 18) {
  echo"the price is 40 DH.";
}else if ($age > 60) {
  echo"the price is 30 DH (Senior discount).";
}else if ($age >= 19 && $age <= 60) {
  echo "the price is 60 DH.";
}
?>