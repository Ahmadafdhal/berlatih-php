<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>papan catur</title>
</head>
<body>

<?php

function papan_catur($angka) {
// tulis kode di sini
	for ($i = 0; $i < $angka; $i++){
		for ($j=0; $j<($angka*2)-1;$j++){
			if($j%2== 1 && $i%2 == 1){
				echo "#&nbsp";
			}elseif ($j%2== 0 && $i%2 == 0) {
				echo "#&nbsp";
			}else{
				echo "&nbsp";
			}
		}
		echo "<br>";
	}
}

// TEST CASES
echo papan_catur(4);

/*
# # # #
 # # #
# # # #
 # # #
 */
echo "<br>";
echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo "<br>";
echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>
</body>
</html>