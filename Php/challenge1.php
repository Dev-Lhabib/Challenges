<?php
### The Moroccan Café

$priceTea = 10;
$Qte = 3;
$StatusUser = true;
$total = $priceTea * $Qte;

if($Qte > 5){
  $total = ($priceTea * $Qte) - $Qte;
}
if ($StatusUser == true) {
  $total = $total * 0.8;
}

echo"Total tea bill: $total";

?>



















