<?php


function sort_array($array) 
{
foreach ($array as $a)
{
	for ($i = 0; $i < count($a); $i++)
	{
		for ($j = 0; $j < count($a)-1; $j++)
		{
			if ($a[$j] > $a[$j+1])
			{
				$temp = $a[$j+1];
				$a[$j+1] = $a[$j];
				$a[$j] = $temp;
			}
		}
	}
	echo "<pre>";
	// cetak array
	print_r($a);
	echo "</pre>";
}
}
// inisialisasi nilai array
$b = [['b','c','a','m','e','g'], ['f','d','h','j','i','l','k'], ['o','m','n','q','p','s','r','v','t','u','x','w']];
// gunakan fungsi pada array $b
sort_array($b);
echo "<pre>";
?>
