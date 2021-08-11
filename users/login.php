<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
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
include("baglan.php"); //veri tabanına bağlandık



//Giriş formu doldurulmuşsa kontrol ediyoruz
if ($_POST) {
    $txtuser = $_POST["txtuser"]; //Kullanıcı adını değişkene atadık
    $txtpassword = $_POST["txtpassword"]; //Parolayı değişkene atadık
    $txtpasswordagain = $_POST["txtpasswordagain"]; //Parolayı değişkene atadık
}
?>
<!-- Formumuzu oluşturuyoruz-->
<form id="form1" method="post">
    <div class="row align-content-center justify-content-center ">
        <div class="col-md-3 kutu">
            <h3 class="text-center">Add New User</h3>
            <table class="table">
                <tr>
                    <td>

                        <input type="text" ID="txtuser" name="txtuser" class="form-control" placeholder="user name" value='<?php echo @$txtuser ?>'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" ID="txtpassword" name="txtpassword" class="form-control" placeholder="password"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" ID="txtpasswordagain" name="txtpasswordagain" class="form-control" placeholder="passwordagain"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        //Post varsa yani submit yapılmışsa veri tabanından kontrolü yapıyoruz.
                        if ($_POST) {

                            //Verilerin düzgün girilip girilmediğini kontrol ediyoruz
                            if ($txtpassword == $txtpasswordagain && $txtpassword != '' && $txtuser != '') {
                                //parolayı belilirlediğimiz şekilde şifreliyip veri tabanına yazıyoruz
                                $txtpassword = md5('56' . $txtpassword . '23');
                                if ($sorgu = $baglanti->query("INSERT INTO users (user, password) VALUES ('$txtuser', '$txtpassword')"))
                                {
                                    header("location:index.php"); //kayıt başarılı ise sayfayı yönlendiriyoruz
                                }
                                else
                                {
                                    echo 'bir hata oldu tekrar deneyin';
                                }
                            }
                            else
                            {
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