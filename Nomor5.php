<?php
function generate($jumlah)
{
	// masukan angka dan huruf yang hendak dibuat serial number
	$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	// inisialisasi nilai awal
	$serial = '';
	$max = count($chars)-1;
	for ($j=0; $j<$jumlah; $j++)
	{
		for($i=0;$i<16;$i++)
		{
		  $serial .= (!($i % 4) && $i ? '-' : '').$chars[rand(0, $max)];

		}
	}
	// memasukan nilai serial number ke dalam array
	$serialfix = str_split($serial, 19);
	echo "<pre>";
	print_r($serialfix);
	echo "</pre>";
		
}
// hasilkan 5 buah serial number
generate(5);
?>
