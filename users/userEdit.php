<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Giriş</title>
    <style>
        .kutu {
            margin-top: 40px
        }
    </style>
</head>
<body>
<?php
session_start(); //oturum başlattık
include("user.sql"); //veri tabanına bağlandık

//eğer mevcut oturum yoksa sayfayı yönlendiriyoruz.
if (!isset($_SESSION["session"]) || $_SESSION["session"] != "6027") {
    header("location:login.php");
}

//güncelleme yapılacak kullanıcının verilerini alıyoruz
$id = (int)$_GET["id"];
if (!empty($baglanti)) {
    $sorgu = $baglanti->query("select * from users where id=$id");
}
$sonuc = $sorgu->fetch_assoc();
?>
<!-- Formumuzu oluşturuyoruz-->
<form  id="form1" method="post">
    <div class="row align-content-center justify-content-center ">
        <div class="col-md-3 kutu">
            <h3 class="text-center">Edit user</h3>
            <table class="table">
                <tr>
                    <td>
                        <!-- Kullanıcı adını value ya ekliyoruz-->
                        <input type="text" ID="txtuser" name="txtuser" class="form-control" placeholder="user name" value='<?php echo $sonuc['user'] ?>'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" ID="txtpassword" name="txtpassword" class="form-control" placeholder="password"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" ID="txtpasswordagain" name="txtpasswordagain" class="form-control" placeholder="password again"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        //Post varsa yani submit yapılmışsa veri tabanından kontrolü yapıyoruz.
                        if ($_POST) {

                            //Giriş formu doldurulmuşsa kontrol ediyoruz
                            $txtuser = $_POST["txtuser"]; //Kullanıcı adını değişkene atadık
                            $txtpassword = $_POST["txtpassword"]; //Parolayı değişkene atadık
                            $txtpasswordagain = $_POST["txtpasswordagain"]; //Parolayı değişkene atadık

                            //Verilerin düzgün girilip girilmediğini kontrol ediyoruz
                            if ($txtpassword == $txtpasswordagain && $txtpassword != '' && $txtuser != '') {
                                //şifrelemeyi yapıyoruz
                                $txtpassword = md5('56' . $txtpassword . '23');
                                if ($sorgu2 = $baglanti->query("UPDATE users SET user='$txtuser', password='$txtpassword' WHERE  id=$id")) {
                                    header("location:index.php"); //güncelleme başarılı ise sayfayı yönlendiriyoruz
                                } else {
                                    echo 'bir hata oldu tekrar deneyin';
                                }
                            } else {
                                //eğer kullanıcı adı ve parola boş ve paralolar uyuşmuyorsa
                                //hata mesajı verdiriyoruz
                                echo "Alanları düzgün doldurunuz";
                            }
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <input type="submit" class="btn btn-primary btn-block" ID="btnLogin" value="Save"/>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>
</body>
</html>