<?php
$array = array('text', 'text2');
$array2 = array(1,2,1.1,2.1);
$multidimensionalArray = array(array(1,2), array(1,2));
count($array);
print_r(array_merge($array, $array2));
array_pop($array);
array_push($array, "text");