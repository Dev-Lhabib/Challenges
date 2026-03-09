<?php
### PHP Loops Practice Challenges

# The Linear Counter (While Loop)
$number = 1;

while ($number <=10) {
  echo $number . "\n";
  $number++;
}

# Reverse Countdown
$number = 10;

while ($number >=1) {
  echo $number . "\n";
  $number--;
}

# Even Number Detector
$number = 1;

while ($number <=20) {
  if ($number %2== 0) {
  echo $number . "\n";
  }
  $number ++;
}

# Even Number Counter
$i = 50;
$total = 0;

for ($i = 0; $i < 50; $i++) {
  if ($i % 2 == 0) {
    $total = $total + 1;
  }
}

echo "Total even numbers : $total";

# Star Printer
for ($number = 0; $number < 10; $number++) {
  echo"*";
}

# Growing Triangle (Nested Loops)
for ($i = 0; $i < 6; $i++) {
  for ($j = 0; $j < $i; $j++) {
    echo"*";
  }
  echo"\n";
}
