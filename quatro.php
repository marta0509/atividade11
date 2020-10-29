<?php
$a = array('a' =>"maça",'b'=>"banana");
$b = array('a' =>"kiwi",'b'=>"ananás",'c'=>"morango");
$resultado1=array_merge($a,  $b);

foreach ($resultado1 as $item) {
	echo $item. " ";
}

echo "<br>";

$resultado2=array_merge( $b,  $a);

foreach ($resultado2 as $item) {
	echo $item. " ";
}
?>