<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UBAH HURUF</title>
</head>
<body>

<?php
function ubah_huruf($string){
//kode di sini
$abjad = "abcdefghijklmnopqrstuvwxyz";
$output = "";
for($i = 0; $i < strlen($string); $i++){
	$position = strrpos($abjad, $string[$i]);
	$output .= substr($abjad, $position+1, 1);
}
return $output;

}


// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>". ubah_huruf('developer'); // efwfmpqfs
echo "<br>". ubah_huruf('laravel'); // mbsbwfm
echo "<br>". ubah_huruf('keren'); // lfsfo
echo "<br>". ubah_huruf('semangat'); // tfnbohbu

?>

</body>
</html>
