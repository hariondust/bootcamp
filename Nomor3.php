<?php

function cetak_gambar($n)
{
for ($i=1; $i <= $n; $i++) { 
    for ($j=1;$j<=$n;$j++) {
    	if ($i == 1 || $i == $n || $j == 1 || $j == $n || $i%2==1)  
    			// cetak lambang asterisk pada nilai yg sama dan yang tidak habis dibagi 2        
                echo("* ");          
            else
            	// cetak lambang equal pada nilai yang habis dibagi 2
                echo("= ");
    	} 
    	echo("<br />");
    }
}
//cetak lambang sebesar 5 (i) * 5 (j)
cetak_gambar(5);

?>
