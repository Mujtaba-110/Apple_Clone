<?php
$even = $odd = array();
$da = array(1,2,3,4,5,6,7,8,9,10, 11,12,13,14,15,16,17,18,19);

foreach ($da as $key => $value) {
    if ($value % 2 == 0) {
        $even[] = $value;
    } else {
        $odd[] = $value;
    }
}
$total_even = count($even);
$total_odd = count($odd);
$diff = $total_even - $total_odd;
$flag = ($diff) > -1 ? $diff : ($total_odd - $total_even);
echo "Total Even: ".$total_even."</br>";
echo "Total Odd: ".$total_odd."</br>";
echo "Difference ".$flag."</br>";


echo "<pre>";
print_r($even);
echo "</pre>";

echo "<pre>";
print_r($odd);
echo "</pre>";
die("odd");
die("even");
?>