<?php
class Matahati
{
    function total($helai, $totala, $totalb, $totalc, $totald, $member)
    {
        if ($helai == 2) {
            $totalAkhir1 = $totala - ($totala * 20/100);
            echo "Total harga pakaian dita, dengan " . $helai . " buah helai adalah " . $totalAkhir1 . "<br>";
        }

        if ($member) {
            $totalAkhir2 = $totalb - ($totala * 35/100);
            echo "Total harga pakaian Toni, dengan Member adalah " . $totalAkhir2 . "<br>";
        } else {
            echo "Total harga pakaian Adit, Tidak menggunakan Member adalah " . $totalc . "<br>";
        }

        $helai++;
        $kantong = $helai * 2000;
        $totalAkhir3 = $totald + $kantong;
        echo "Total harga pakaian Intan, dengan 1 gratis satu, dengan menggunakan 2 kantong adalah " . $totalAkhir3 . "<br>";
    }
}
