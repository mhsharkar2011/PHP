<?php 

$arr_one = ['Red','Blue','What'];
$arr_two = ['Blue ','Yellow ','Green'];
// $arr_three = ['Black','Orange','No'];



$result = array_merge($arr_one, $arr_two);
echo "<pre>";
print_r($result);
echo "</pre>";
?>