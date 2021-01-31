
<?php

$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

echo 'for';
echo '</br>';
for($i = 0; $i < count($people); ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
    print_r($people[$i]);
    echo '</br>';
}
echo '</br>';

echo 'foreach';
echo '</br>';
foreach ($people as $key => $value){
    $people[$i]['salt'] = mt_rand(000000, 999999);
    print_r($people[$i]);
    echo '</br>';
}
echo '</br>';

echo 'while';
echo '</br>';
$i = 0;
while ($i <= 1) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
    print_r($people[$i]);
    echo '</br>';
    $i++;
}
echo '</br>';

echo 'do while';
echo '</br>';
$i = 0;
do{
    $people[$i]['salt'] = mt_rand(000000, 999999);
    print_r($people[$i]);
    echo '</br>';
    $i++;
}while($i <= 1);
echo '</br>';



?>
