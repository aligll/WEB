<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Web Teknolijileri ve Programlama</title>
</head>

<body>

    <!-- Acıklama Satırı -->

    <?php

    // Acıklama Satırı

    /* Acıklama Satırı Bloğu

    shift+alt+a 
    */



    /*Kullanıcı Komutları
        echo: ekrana yazdırma işlemi yapar.
        İçerisinde html etiketleri kullanılabilir.
        Çift veya tek tırnak ile kullanılabilir.
        Çift tırnak içerisinde değişken içerikleri gösterilir.
        Nokta işareti ile birleştirme yapılabilir.




    */

    echo "<h1>Aydın Adnan Menderes Üniversitesi</h1>";
    echo "<h3>Aydın Adnan Menderes Üniversitesi</h3>";
    echo "Bilgisayar Programcılığı " . "Web Teknolojileri" . "<br>";
    echo "Bilgisayar Programcılığı" . "<br>" .  "Web Teknolojileri";


    /* Deişken Tanımlama Kuralları */


    echo "<hr> <h4> Değişken Tanmlama Kuralları </h4>";
    echo "<ol> 
            <li> Değişken İsimleri $ ile başlar. </li>
            <li> Değişken isimleri sayısal bir ifade ile başlayamaz. </li>
            <li> Değişken issimlerinde boşluk kullanılamaz. İki kelime varsa birincisi_sinif
            birincisinif birinci-sinif örneklerindeki kullanımlar önerilir. </li>
            <li> Değişken ve dosya isimlerinde türkçe karekter kullnılmamalıdır. </li>
            <li> Değişken isimlerinde büyük-küçük harf kullanımına duyarlıdır. \$sayi != \$Sayi </li>
            <li> Değiişken içerisinde eğer metinsel bir ifade varsa çift tırnak (\") veya tek tırnak (') kullanılır. </li>
            <li> Değişken içerisinde eğer sayısal bir ifad varsa tırnak kullanılmadan yazılır. </li>
            <li> Değişken ismi değişkenin içeriğini ifade etmeli. </li>
            <li> Değişkenler ekrana echo komutu ile yazdırılır. </li>
    
    
    
    </ol>";

    echo "<hr> <h4> Değişken Tanmlama Örnekleri </h4>";
    $isim = "Ahmet";
    $soyisim = "Davut";
    $yas = 29;

    echo $isim . " " . $soyisim . " " . $yas;
    echo  "<br>";
    echo "$isim $soyisim $yas";

    /* Uygulama:
        Üniversite-Myo-Ad-Soyad-Numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz.
        Girilen bu değişkenlerin değerlerini bir html tablo içereisinde gösteriniz.
    
    
    
    
    
    
    */

    echo "<br> <hr>";
    echo "<h2>UYGULAMA </h2><hr> ";
    $üniverrsite = "Aydın Adna Menderes Üniversitesi";
    $myo = "Adnan Menderes Meslek Yüksek Okulu";
    $ad = "Ali";
    $soyad = "Gül";
    $numara = "216001028";






    ?>







    <table border=2>
        <tr>
            <td><?php echo $üniverrsite ?></td>
        </tr>
        <tr>
            <td><?php echo $myo ?></td>
        </tr>
        <tr>
            <td><?php echo $ad ?></td>
        </tr>
        <tr>
            <td><?php echo $soyad ?></td>
        </tr>
        <tr>
            <td><?php echo $numara ?></td>
        </tr>
    </table>




</body>

</html>