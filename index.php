<?php
class animal
{
    public $jumlah_kaki, $bisa_terbang;
}

class anjing extends animal
{
    function bersuara()
    {
        return "gukgukguk";
    }
}

class elang extends animal
{
    function bersuara()
    {
        return "Miiiip";
    }
}

class sapi extends animal
{
    function bersuara()
    {
        return "moook";
    }
}

class kucing extends animal
{
    function bersuara()
    {
        return "meeeoww";
    }
}


// anjing
$Golden = new anjing;
$Golden->jumlah_kaki = 4;
$Golden->bisa_terbang = "tidak bisa terbang";

echo "Golden adalah anjing <br>";
echo "punya kaki sebanyak:" . $Golden->jumlah_kaki . "<br>";
echo $Golden->bisa_terbang . "<br>";
echo "suaranya: " . $Golden->bersuara();

echo "<hr>";


// elang
$akos = new elang;
$akos->jumlah_kaki = 2;
$akos->bisa_terbang = "bisa terbang";

echo "akos adalah elang <br>";
echo "punya kaki sebanyak:" . $akos->jumlah_kaki . "<br>";
echo $akos->bisa_terbang . "<br>";
echo "suaranya: " . $akos->bersuara();

echo "<hr>";
 

// sapi
$limosine = new sapi;
$limosine->jumlah_kaki = 4;
$limosine->bisa_terbang =  " tidak bisa terbang";

echo "limosine adalah sapi <br>";
echo "punya kaki sebanyak:" . $limosine->jumlah_kaki . "<br>";
echo $limosine->bisa_terbang . "<br>";
echo "suaranya: " . $limosine->bersuara();

echo "<hr>";

// kucing
$gembul = new kucing;
$gembul->jumlah_kaki = 4;
$gembul->bisa_terbang =  "tidak bisa terbang";

echo "gembul adalah kucing <br>";
echo "punya kaki sebanyak:" . $gembul->jumlah_kaki . "<br>";
echo $gembul->bisa_terbang . "<br>";
echo "suaranya: " . $gembul->bersuara();

echo "<hr>";