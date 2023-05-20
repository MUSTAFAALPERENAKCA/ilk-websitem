<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php 
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $email = $_POST['email'];
        $pwd=$_POST['pwd'];
        if($email=="b221210014@sakarya.edu.tr"&& $pwd=="b221210014"){
            echo "Başarıyla giriş yaptınız!";
        }
        else {
            echo "Kullanıcı adı veya şifre hatalı! ";
        }
        echo "Hoşgeldin".$email;
    }
    ?>
</body>
</html>