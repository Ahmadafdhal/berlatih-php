<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CARI MEAN</title>
</head>
<body>
<?php
function cari_mean($arr){
//kode di sini
	$max = array_sum($arr);
	for($i=0; $i<count($arr);$i++){
		return ceil($max / 5);
	}
}

	
//TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo "<br>". cari_mean([3, 5, 7, 5, 3]); // 5
echo "<br>".cari_mean([6, 5, 4, 7, 3]); // 5
echo "<br>".cari_mean([1, 3, 3]); // 2
echo "<br>".cari_mean([7, 7, 7, 7, 7]); // 7

/*
$arr = [1,4,6,7,3,5,9,8];
$max = max($arr);

for ($i=0; $i < count($arr); $i++) { 
	
	echo $arr[$i] . ' '; 
}

echo '=> nilai array ';

echo '<br> Nilai Terbesar dari array diatas ialah ' . $max;
*/
?>

</body>
</html>