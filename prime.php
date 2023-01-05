<?php
function CheckPrime($num)
{
	for($i=2;$i<$num/2;$i++) {
		if ($num % $i == 0) {
			return 0;
		} else {
			return 1;
		}
	}
}
$numb = 17;
$flag = CheckPrime($numb);
if($flag == 1){
	echo "It is prime number";
}
else{
	echo "It is not prime number";
}
?>