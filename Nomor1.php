<?php
 
function check($word)
 
{
	// inisialisasi isi array
 	$dataKey = array('dumb','ways', 'the', 'best');
 	// hitung jumlah array
	$jml_kata = count($dataKey);
	for ($i=0; $i<$jml_kata; $i++)
	{
		if (stristr($teks, $dataKey[$i]))
		{ 
			// tampil data TRUE
			echo $dataKey[$i]." => True <br />";
		} 
			else 
		{ 
			// tampil data FALSE
			echo $dataKey[$i]." => False <br />";
		}
	}
}

$word = 'dumbways';
check($word);
?>
