<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /* php versiyonunu ve detaylarını gösteren fonksiyondur */
    /* echo phpinfo() */

    echo "<h4>Tırnak İşaretleri Arasındaki Farklar</h4>";
    $üni="Adnan menderes Üniversitesi";
    echo "Değişken İçeriği: $üni ";
    echo "<br>";

    /* Değişkenin İsmini Yazdırır */
    echo "1-Kazandığınız Üniversite: ". '$üni' ;
    echo "<br>";

     /* Değişkenin İçeriğini Yazdırır */
    echo "2-Kazandığınız Üniversite: " . "$üni" ;
    echo "<br>";

    /* Değişkenin İçeriğini Yazdırır */
    echo "3-Kazandığınız Üniversite: " . $üni ;
    echo "<br>";

    /* Değişkenin içeriğini yazdırır */
    echo "4-Kazandığınız Üniversite: $üni" ;

    

    echo "<hr><h4>Temel Matemtiksel İşlemler</h4>";
    echo"<h5>Toplama İşlemi</h5>" ;


    /* 3 Fonksiyonda Aynı işlemde kullanılabilir 

     echo '$sayi1 + $sayi2 = ' . $sayi1 + $sayi2;
    
    echo "$sayi1 + $sayi2 = " .  $sayi1 + $sayi2;

    $sonuc = $sayi1 + $sayi2;
    echo "$sayi1 + $sayi2 = $sonuc";
    
    */
    
    $sayi1 = 10;
    $sayi2 = 20;
    $sonuc = $sayi1 + $sayi2;
    echo "$sayi1 + $sayi2 = $sonuc";


    echo"<h5>Çıkarma İşlemi</h5>" ;
    
    $sayi1 = 90;
    $sayi2 = 20;
    $sonuc = $sayi1 - $sayi2;
    echo "$sayi1 - $sayi2 = $sonuc";
   

    echo"<h5>Çarpma İşlemi</h5>" ;
    
    $sayi1 = 90;
    $sayi2 = 20;
    $sonuc = $sayi1 * $sayi2;
    echo "$sayi1 * $sayi2 = $sonuc";
    

    echo"<h5>Bölme İşlemi</h5>" ;
    
    $sayi1 = 90;
    $sayi2 = 20;
    $sonuc = $sayi1 / $sayi2;
    echo "$sayi1 / $sayi2 = $sonuc";
    
    
    echo"<h5>Üst Alma (pow) İşlemi</h5>" ;
    $x=3;
    $y="2";
    echo "<br> Değiişken Tipi: $y >>>" . gettype($x) . "<br>";
    echo "<br>";
    echo"$x<sup>$y</sup>=" . (pow($x,$y));


    echo"<h5>Kare Kök  Alma İşlemi</h5>" ;
    $x=25;
    $karekok=sqrt($x);
    echo "$x'in Karrekökü: $karekok";
    

    echo"<h5>Mutlak Değer İşlemi</h5>" ;
    $x=(-4);
    $mutlak=abs($x);
    echo "$x'in Mutlak değeri: $mutlak ";

    echo"<h5>Taban Değişim İşlemi (base_convert(x,taban1,taban2))</h5>" ;
    echo "27 sayısını 2'lik tabanddaki karşılığı:" . base_convert(27,10,2);
    echo "<br>";
    $sayi=50;
    $taban=10;
    $yenitaban=2;
    $sonuc=base_convert($sayi,$taban,$yenitaban);
    echo " ($sayi)<sub>$taban</sub> : ($sonuc)<sub>$yenitaban</sub> ";


    echo"<h5>Mod Alma İşlemi(fmod(x,y))</h5>" ;
    $x=15;
    $y=4;
    $mod=fmod(15,4);
    echo"$x mod $y = $mod " ;
    echo "<br>";
    echo "$x Sayısı: " . ((fmod($x,2) == 0) ? "Çifttir" : "Tektir");

    echo"<h5>Yuvarlama İşlemi(round(x,y)</h5>" ;
    $x=15.325;
    $y=15.365;
    echo "$x   1 Ondalık Basamak Yuvarlanması: " . round($x,1);
    echo "<br>";
    echo "$y   1 Ondalık Basamak Yuvarlanması: " . round($y,1);


    echo"<h5>Yuvarlama İşlemi(floor(x))</h5>" ;
    /* Her zaman en yakın aşağı tam sayı değerine yuvarlama işlemi yapar. */
    $x = 15.315;
    echo "$x : " . floor($x);


    echo"<h5>Yuvarlama İşlemi(ceil(x))</h5>" ;
    /* Her zaman en yakın yukarı tam sayı değerine yuvarlama işlemi yapar. */
    $x = 15.315;
    echo "$x : " . ceil($x);


    echo"<h5>Rastgele Sayı Üretme (rand())</h5>" ;
    echo "10-100 Arasında Rastgele 11 Değer:  " . rand(10,100);

    for ($i=1; $i <= 10; $i++) { 
        echo "<br> $i Eleman : " . rand(10,100);
    }










    
    ?>    

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>