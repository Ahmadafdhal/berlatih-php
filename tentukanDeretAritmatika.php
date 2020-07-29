<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DERET ARITMATIKA</title>
</head>
<body>
	
<?php
/*
function print_deret_fibonacci($jumlah)
{
  // siapkan 2 angka awal
  $angka_sebelumnya=0;
  $angka_sekarang=1;
  
  //simpan string angka awal
  $hasil = "$angka_sebelumnya $angka_sekarang";
 
  for ($i=0; $i<$jumlah-2; $i++)
  {
    // hitung angka fibonacci
    $output = $angka_sekarang + $angka_sebelumnya;
    // hasilnya ditambahkan ke string $hasil
    $hasil = $hasil." $output";
  
    //siapkan angka untuk perhitungan berikutnya
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
  }
  return $hasil;
}
  
echo print_deret_fibonacci(8);
echo "<br>";
// hasil: 0 1 1 2 3 5 8 13
 
echo print_deret_fibonacci(10);
echo "<br>";
// hasil: 0 1 1 2 3 5 8 13 21 34
 
echo print_deret_fibonacci(20);
echo "<br>";
// hasil: 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584 4181
*/

function tentukan_deret_aritmatika($arr) {
// kode di sini

}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false

?>

</body>
</html>