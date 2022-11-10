<?php 
	$message=$_GET['msg']??"bonjour!";
	$max=$_GET['nb']??5;
	$color=$_GET['color']??'black';
	$bgcolor=$_GET['bgcolor']??'white';

	foreach (range(1,$max) as $i){
	echo "<h$1 style='color: $color;bakcground-color: $bgcolor'>
	$message</h$1>";
}