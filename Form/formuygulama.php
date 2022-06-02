<?php 
include("veri.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form Uygulaması </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card mt-3 bg-light">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label> Adınız Soyadınız </label>
                            <input type="text" class="form-control" name="adinizsoyadiniz" required="required">
                            <small class="form-text text-muted"> * Bu Alan Zorunludur. </small>
                        </div>
                        <br>
                        <div class="form-group">
                            <label> Email </label>
                            <input type="email" class="form-control" name="email" required="required">
                            <small class="form-text text-muted"> * Bu Alan Zorunludur. </small>
                        </div>
                        <br>
                        <div class="form-group">
                            <label> Telefon Numaranız </label>
                            <input type="text" class="form-control" name="gsm">
                        </div>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  name="gender" value="Kadın">
                            <label class="form-check-label" > Kadın </label> 
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  name="gender" value="Erkek">
                            <label class="form-check-label" > Erkek </label> 
                        </div>
                        <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  name="gender" value="Diğer">
                            <label class="form-check-label" > Diğer </label>
                        </div> -->
                        <br>
                        <br>
                        <div class="form-group">
							<select name="ders" class="form-control">
							<option> Ders Seçimi Yapınız. </option>
							<option value="Php"> Php </option>
							<option value="Java"> Java </option>
							<option value="CSS"> CSS </option>

						</select>
					</div>
                    <br>
                    <div class="form-group">
                            <label> Notunuz </label>
                            <input type="text" class="form-control" name="not">
						</div>
                        <br>
                        <div class="form-group">
							<input type="submit" value=" GÖNDER " class="btn btn-primary">
							<div class="submitting"></div> 
						</div>
                        <br>
                    </form>

                  

                                    
                <?php

                /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $adınızSoyadınız=$email=$gsm=$gender=$ders=$not= "";
                    $adınızSoyadınız=security($_POST["adınızSoyadınız"]);
                    $email=security($_POST["email"]);
                    $gsm=security($_POST["gsm"]);
                    $gender=security($_POST["gender"]);
                    $ders=security($_POST["ders"]);
                    $not=security($_POST["not"]);

                    echo "Hoşgeldiniz ".$adınızSoyadınız."<br>";
                    echo "E Posta Adresiniz: ".$email."<br>";
                    echo "Telefon Numaranız: ".$gsm."<br>";
                    echo "Cinsiyetiniz: ".$gender."<br>";
                    echo "Seçtiğiniz Ders: ".$ders."<br>";
                    echo "Notunuz: ".$not."<br>";

                    
              
                function security($text){
                    $text=trim($text);
                    $text=stripslashes($text);
                    $text=htmlspecialchars($text);
                    return $text;
                }   }*/

               
            
                if ($_POST) { 
	
                    @$adinizsoyadiniz = $_POST['adinizsoyadiniz']; 
                    @$email  = $_POST['email '];
                    @$gsm = $_POST['gsm'];
                    @$gender= $_POST['gender'];
                    @$ders = $_POST['ders'];
                    @$not = $_POST['not'];
                
                    if ($adinizsoyadiniz<>"" && $email<>"" && $gsm<>"" && $gender<>"" && $ders<>"" && $not<>"") { 
                        
                        if ($baglanti->query("INSERT INTO form (adinizsoyadiniz,email,gsm,gender,ders,not) VALUES ('$adinizsoyadiniz','$email','$gsm','$gender','$ders','$not')")) 
                        {
                            echo "Veri Eklendi"; 
                        }
                        else
                        {
                            echo "Hata oluştu";
                        }
                
                    }
                
                }
                
                ?>
                </div>
                <!-- ############################################################## -->
                
                
                <div class="col-md-7">
                <table class="table">
                    
                    <tr>
                        <th>No</th>
                        <th>Ad Soyad</th>
                        <th>Mail</th>
                        <th>Numara</th>
                        <th>Cinsiyet</th>
                        <th>Ders</th>
                        <th>Mesaj</th>
                        <th></th>
                        <th></th>
                    </tr>
                
                
                
                <?php 
                
                $sorgu = $baglanti->query("SELECT * FROM form"); 
                
                while ($sonuc = $sorgu->fetch_assoc()) { 
                
                $id = $sonuc['id']; 
                $adinizsoyadiniz  = $sonuc['adinizsoyadiniz ']; 
                    $email = $sonuc['email'];
                    $gsm = $sonuc['gsm'];
                    $gender = $sonuc['gender'];
                    $ders = $sonuc['ders'];
                    $not = $sonuc['not'];
                
                
                ?>
                    
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $adinizsoyadiniz ; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $gsm; ?></td>
                        <td><?php echo $gender; ?></td>
                        <td><?php echo $ders; ?></td>
                        <td><?php echo $not; ?></td>
                    </tr>
                
                <?php }  ?>
                
                </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>