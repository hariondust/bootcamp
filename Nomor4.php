<?php
function hitungVoucher($nama, $bayar)
{
    // perhitungan diskon voucher Asik
    If ($nama == "DumbWaysAsik" && $bayar > 20000)
    {
        // variable diskon beserta rumus perhitungannya
        $diskon = $bayar * 0.5;
            If ($diskon > 20000) {
                $totaldiskon = 20000;    
            } else {
                $totaldiskon = $diskon;
            } 
        // variable biaya total beserta rumus perhitungannya
        $totalbayar = $bayar - $totaldiskon;
        // variable kembalian total beserta rumus perhitungannya
        $kembalian = $bayar - $totalbayar;
        //cetak atau tampilkan data yang sudah dihitung
        echo "Memakai Voucher DumbWaysAsik <br />";
        echo "Nominal uang Rp." . $bayar . "<br />";
        echo "Harga awal Rp." . $bayar . "<br />";
        echo "Total discount Rp." . $totaldiskon . "<br />";
        echo "Total harga Rp." . $totalbayar . "<br />";
        echo "Total kembalian Rp." . $kembalian . "<br />";
    // perhitungan tidak diskon voucher Asik
    } elseif ($nama == "DumbWaysAsik" && $bayar <= 20000) 
    {
        $totaldiskon = 0;
        $totalbayar = $bayar - $totaldiskon;
        $kembalian = $bayar - $totalbayar;
        echo "Tanpa Voucher DumbWaysAsik <br />"; 
        echo "Nominal uang Rp." . $bayar . "<br />";
        echo "Harga awal Rp." . $bayar . "<br />";
        echo "Total discount Rp." . $totaldiskon . "<br />";
        echo "Total harga Rp." . $totalbayar . "<br />";
        echo "Total kembalian Rp." . $kembalian . "<br />";
    // perhitungan diskon voucer Mantap
    } elseif ($nama == 'DumbWaysMantap' && $bayar > 40000)
    {
        $diskon = $bayar * 0.3;
            If ($diskon > 40000) {
                $totaldiskon = 40000;    
            } else {
                $totaldiskon = $diskon;
            } 
        $totalbayar = $bayar - $totaldiskon;
        $kembalian = $bayar - $totalbayar;
        echo "Memakai Voucher DumbWaysMantap <br />";
        echo "Nominal uang Rp." . $bayar . "<br />";
        echo "Harga awal Rp." . $bayar . "<br />";
        echo "Total discount Rp." . $totaldiskon . "<br />";
        echo "Total harga Rp." . $totalbayar . "<br />";
        echo "Total kembalian Rp." . $kembalian . "<br />";
    // perhitungan tidak diskon voucher Mantap
    } elseif ($nama == 'DumbWaysMantap' && $bayar <= 40000) {
        $totaldiskon = 0;
        $totalbayar = $bayar - $totaldiskon;
        $kembalian = $bayar - $totalbayar;
        echo "Tanpa Voucher DumbWaysMantap <br />";
        echo "Nominal uang Rp." . $bayar . "<br />";
        echo "Harga awal Rp." . $bayar . "<br />";
        echo "Total discount Rp." . $totaldiskon . "<br />";
        echo "Total harga Rp." . $totalbayar . "<br />";
        echo "Total kembalian Rp." . $kembalian . "<br />";
    }
}

hitungVoucher('DumbWaysMantap', 100000);
?>
