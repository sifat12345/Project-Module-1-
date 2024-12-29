<?php
// echo "Enter units consumed: ";
// $units = (int) readline();
// if ($units <= 100) {
// $bill = $units * 5; // $5 per unit for first 100 units
// } elseif ($units <= 200) {
// $bill = 100 * 5 + ($units - 100) * 10; // $10 per unit for 101–200 units
// } else {
// $bill = 100 * 5 + 100 * 10 + ($units - 200) * 15; // $15 per unit above  200 units
// }
// echo "Total bill: $$bill\n";







 // Sifat Function
echo "Enter Unit: ";

$unit = (int)readline();

$bill_5_tk  = 5*100;   //  500 ---100 units 
$bill_7_tk  = 7*75;    //  525  -- total bill: 1025  ---175 units 
$bill_10_tk = 10*75;  //  750   -- total bill: 1775 ---250 units
$bill_12_tk = 12*50;  // 600 -- total bill: 2375  ---300 units 

if($unit <= 100){  
  $bill = $unit * 5;
}elseif($unit <= 175){
  $bill = $bill_5_tk + ($unit - 100) * 7 ;
}elseif($unit <= 250){
  $bill = $bill_5_tk + $bill_7_tk + ($unit - 175) * 10 ;
}elseif($unit <= 300){
  $bill = $bill_5_tk + $bill_7_tk + $bill_10_tk + ($unit - 250) * 12 ;
}else{
  $bill = $bill_5_tk + $bill_7_tk + $bill_10_tk +  $bill_12_tk + ($unit - 300) * 15 ;
}

echo "Electricity Bill is: ".$bill; 