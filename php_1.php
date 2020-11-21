<?php
$price = 0;
$fairw = 0;
$fairsuv=0;
$pickup = $_POST['pickup'];
$drop = $_POST['drop'];
$cab = $_POST['cab'];
$textinput = $_POST['textinput'];
$distance = array("Charbagh"=>"0", "Indira Nagar"=>"10", "BBD"=>"30", "Barabanki"=> "60",
"Faizabad"=> "100", "Basti"=> "150", "Gorakhpur"=> "210");	
$total = abs($distance[$drop]-$distance[$pickup]);
if($textinput<=10 && $textinput!=0){
	$fairw=50;
	$fairsuv=100;
}elseif($textinput==0){
	$fairw=0;
	$fairsuv=0;
}
elseif($textinput>10 && $textinput<=20){
	$fairw=100;
	$fairsuv=200;
}else{
	$fairw=200;
	$fairsuv=400;
}
if ($cab === "CedMicro") {
	if ($total <= 10) {
		$price+=($total*13.5)+50;
		echo $price;

	}elseif ($total >10 && $total<=50) {
		$price+=10*13.5;
		$price+=(($total-10)*12.00)+50;
		echo $price;
	}elseif ($total>50 && $total<=100) {
		$price+=10*13.5;
		$price+=50*12.00;
		$price+=(($total-60)*10.20)+50;
		echo $price;
	}else{
		$price+=10*13.5;
		$price+=50*12.00;
		$price+=100*10.20;
		$price+=(($total-160)*8.50)+50;
		echo $price;

	}
}elseif ($cab === "CedMini") {
	if ($total <= 10) {
		$price+=($total*14.5)+150+$fairw;
		echo $price;

	}elseif ($total >10 && $total<=50) {
		$price+=10*14.5;
		$price+=(($total-10)*13.00)+150+$fairw;
		echo $price;
	}elseif ($total>50 && $total<=100) {
		$price+=10*14.5;
		$price+=50*13.00;
		$price+=(($total-60)*11.20)+150+$fairw;
		echo $price;
	}else{
		$price+=10*14.5;
		$price+=50*13.00;
		$price+=100*11.20;
		$price+=(($total-160)*9.50)+150+$fairw;
		echo $price;

	}
}elseif ($cab === "CedRoyal") {
	if ($total <= 10) {
		$price+=($total*15.50)+200+$fairw;
		echo $price;

	}elseif ($total >10 && $total<=50) {
		$price+=10*15.50;
		$price+=(($total-10)*14.00)+200+$fairw;
		echo $price;
	}elseif ($total>50 && $total<=100) {
		$price+=10*15.50;
		$price+=50*14.00;
		$price+=(($total-60)*12.20)+200+$fairw;
		echo $price;
	}else{
		$price+=10*15.50;
		$price+=50*14.00;
		$price+=100*12.20;
		$price+=(($total-160)*10.50)+200+$fairw;
		echo $price;

	}
}elseif ($cab === "CedSUV") {
	if ($total <= 10) {
		$price+=($total*16.50)+250+$fairsuv;
		echo $price;

	}elseif ($total >10 && $total<=50) {
		$price+=10*16.50;
		$price+=(($total-10)*15.00)+250+$fairsuv;
		echo $price;
	}elseif ($total>50 && $total<=100) {
		$price+=10*16.50;
		$price+=50*15.00;
		$price+=(($total-60)*13.20)+250+$fairsuv;
		echo $price;
	}else{
		$price+=10*16.50;
		$price+=50*15.00;
		$price+=100*13.20;
		$price+=(($total-160)*11.50)+250+$fairsuv;
		echo $price;

	}
}
?>
