<?php 

### The Debt Tracker

$friends = [
  "ali" => 110,
  "sarah" => 30,
  "semo" => 20,
  "adil" => 70,
  "ijou" => 120
];
$total =0;

foreach ($friends as $friend => $count){
  $total = $total + $count;
  if ($count > 100){
    echo "$friend owe $count DH \n";
  }
}

echo "Totla is: $total DH"
?>