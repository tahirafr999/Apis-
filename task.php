<?php
// $str = "HHHTTTTHghghg";
// // $count = count_chars($str, 1);
// $str = strtolower($str);
// foreach (count_chars($str, 1) as $i => $val) {
// 	echo chr($i).":";
// 	for($j=1;$j<=$val;$j++){
// 		 echo  "*";
// 	}
// 	echo ",";
// }

$str = 'aaffaabbbccccffdddeeedfffF';
$str = strtolower($str);
$arr = str_split($str);
$result = array_count_values($arr);
$string = http_build_query($result,'','');
// $not_final =  str_replace('=','',$string);
foreach ($arr as $i => $arr2) {
	for($j=1;$j<=$arr2;$j++){
 		 echo  $arr2[$j]."*";
	}
}
// print_r($string);
// print_r($result);
 ?>