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

/* Uygulama: Rastgele üretilen sayı 
50'den büyükse
    Geçtiniz:Notunuz: xx
50'den küçükse 
    Kaldınız:Notunuz: xx
    uygulamasını grçekleştriniz.
    */

$ogr_notu = rand(10,100);
    if($ogr_notu>=50)
{
    echo "Geçtiniz - Notunuz: $ogr_notu " ;
}

    else{
        echo "Kaldınız - Notunuz: $ogr_notu " ;
    }


    echo "<h3> Sık Kullanılan String Fonksiyonlar </h3>";

    $yazi = " Aydın Adnan Menderes Üniversitesi ";
    echo "\$yazi Değişkeninin İçeriği : $yazi ";
    echo "<br> \$yazi değişkeninin Türü: " . gettype($yazi);

    /* İçeriğin Büyük Harfe Dönüştürülmesi */
    echo "<br> \$yazi'nin Büyük Harfle Yazılması: " . $byazi = strtoupper($yazi);
    echo "<br> \$yazi'nin Büyük Harfle Yazılması: " . $byazi = mb_strtoupper($yazi);


    /* İçeriğin Küçük Harfe Dönüştürülmesi */
    echo "<br> \$yazi'nin Küçük Harfle Yazılması: " . $kyazi = strtolower($byazi);
    echo "<br> \$yazi'nin Küçük Harfle Yazılması: " . $kyazi = mb_strtolower($byazi);
    echo "<br>";

    /* İçeriğin İlk Harfinin Büyük Harfe Dönüştürülmesi */
    echo "<br> \$yazi'nin İlk Harfinin Büyük Yazılması: " . $yazi = ucfirst($kyazi);
    echo "<br>";


    /* İçerikteki Her Kelimesinin İlk Harfinin Büyük Harfe Dönüştürülmesi */
    echo "<br> \$yazi'nin Her Kelimesinin İlk Harfinin Büyük Yazılması: " . $yazi = ucwords($kyazi);
    echo "<br>";

     /* İçeriğin Harf Sayısı */
     echo "<br> \$yazi'nin Harf Sayısı: " . strlen($kyazi);
     echo "<br>";

     /* Ascıı Char Dönüşümü */
     echo "Karekter Karşılığı: (100)" . chr(100);
     echo "<br>";



     /* 0-255 Arasındaki Değerleri chr Fonksiyonuna Sokarak Satır Satır Yazdırın. */
     for ($i=0; $i <=255 ; $i++) { 
        echo "$i:".chr($i). " ";
     }
     echo "<br>";


     /* Metin Parçalanarak Diziye Dönüştürülmesi */
     echo "<br> <br>";
     echo $yazi . "<br>";
     $dizi=explode(" ",$yazi);
     echo "<pre>";
     print_r($dizi);
     echo "</pre>";


     /* Metin İçerisindeki Kelime ve Cümle Sayısını Alt Alta yazdırınız. */

     $metin = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, illo! Nostrum temporibus, vel, ullam excepturi eaque, est magni saepe rem quaerat voluptas praesentium possimus assumenda neque minus expedita officia. Dicta?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quidem dolorum ratione voluptas accusantium, animi ex odit. Id, temporibus quae.";

     $kelimeizi=explode(" ",$metin);
     $cümledizi=explode(".",$metin);
     
    echo "Kelime Sayısı: " . count($kelimeizi);
    echo "<br>";
    echo "Cümle Sayısı: " . count($cümledizi);

    /* Uygulama: Veri Tabanından 2022-11-20 şeklinde gelen tarihi 20.11.222 şeklinde gösteriniz. */
    $tarih= "2022-11-20";
    $yenitarih=explode("-",$tarih);
    echo "<pre>";
    print_r($yenitarih);
    echo "</pre>";

    echo "Tarih: $yenitarih[2].$yenitarih[1].$yenitarih[0]";

    /* Dizinin Metine Dönüştürülmesi (implode) */

    echo "<br>";
    $aylardizisi = array (
        "Ocak",
        "Şubat",
        "Mart",
        "Nisan",
    );
    echo "<pre>";
    print_r($aylardizisi);
    echo "</pre>";


    echo $aylarstring = implode("-",$aylardizisi);


    /* str_split String parçalama işlemi yapar. */
    echo "<br>";

    $iban="TR0000000000111122223333";
    $yeniIban=str_split($iban,4);
    echo "<pre>";
    print_r($yeniIban);
    echo "</pre>";

    echo "İmplode Iban: " . implode("-",$yeniIban);


    echo "<br> Forech Iban";

    foreach ($yeniIban as $parca) {
       echo $parca ." ";
    }


    echo "<br> For Iban:";

    for ($i=0; $i < count($yeniIban) ; $i++) { 
        echo $yeniIban[$i]. " ";
    }

    


?>    


</body>
</html>