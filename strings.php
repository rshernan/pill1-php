<?php
print("printed text");
$text="text";
print("printed {$text}")
print("printed".$text);
str_replace("text","new text",$text);
str_ireplace("new text","supernew text",$text);
str_repeat($text, 3);
strlen($text);
strpos($text, 'text');
strtoupper($text);
strtolower($text);
substr($text, 0, 2);