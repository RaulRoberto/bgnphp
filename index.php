<?php
//testing for first push

$categories = [];
$categories[]='Child';
$categories[]='Teen';
$categories[]='Adult';
$categories[]='Senil';
// print_r($categories);


$name = 'Raul';
$age = 8;

// var_dump($name,$age);

if($age >=6 && $age <=12){
	echo($categories[0]);
}
else if ($age >=13 && $age <= 18){
	echo($categories[1]);
}
else{
	echo($categories[2]);
}

?>