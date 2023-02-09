<?php
$fee = 15000;
$commission = ($fee > 20000) ? $fee*(25/100) : (($fee > 10000 && $fee < 20000) ? $fee*(20/100) : (($fee < 10000 && $fee > 7000) ? $fee*(15/100) : "invalid data"));
echo "\n" . $commission;




echo "\n";
$tuition_fee = 15000;

$commission = ($tuition_fee > 20000) ? 0.25 * $tuition_fee :
              (($tuition_fee > 10000) ? 0.20 * $tuition_fee :
              (($tuition_fee > 7000) ? 0.15 * $tuition_fee : 
               "Invalid data"));

echo "The commission is $commission";

?>
