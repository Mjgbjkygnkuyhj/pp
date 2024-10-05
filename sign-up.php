<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/password.css' rel='stylesheet'>
    <link rel="stylesheet" href="./sign-up.css">
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <title>Sign up</title>
</head>

<body>
    <div class="container">
        <div class="hello-star">
            <p>hello star!</p>
        </div>
        <form method="post">
            <div class="sign-in">
                <i for="email" class="fa fa-user"></i>
                <input type="text" name="name" id="name" placeholder="Name" required maxlength="50">

                <i for="email" class="fa fa-envelope"></i>
                <input type="email" name="emailnew" id="email" placeholder="Email" required maxlength="50">

                <div class="tow">
                    <input class="active" name="passnew" type="password" id="pass2" placeholder="Password" required maxlength="25"
                        minlength="8">
                    <div class="group2">
                        <i class="fa fa-lock"></i>
                        <i id="icon" class="fa fa-eye-slash"></i>
                    </div>
                </div>


    <input type="radio" name="radio" id="radio" value="radio" required>
    <label for="radio" class="agreement">I've read and agree to the <a href="#">terms & conditions</a></label><br>
    <input type="submit" name="send"  value="Create Account" />
    <a id="mk"  class="homepage" href="index.html" style="text-decoration: none;color: #FFF;">home page</a>
    <p style="font-family: 'Rubik'; font-size: 20px;color: #00507C;position: relative;top: -12px;">Already registered? <a style="text-decoration: none;color: black;font-weight: bold;" href="sgin-in.html">Sign in</a></p>

        </form>
    </div>

    </div>

    </div>
    <script src="sign-in.js"></script>
</body>

</html>
<?php 
 if(isset($_POST['send'])){
    @$a = $_COOKIE['i'];
    $a++;
    @setcookie('i',$a);
    if($_COOKIE['i'] == 2){
echo "2";
    }




    /*
    $userfiltetr = strip_tags($_POST['name']);
    $useropenssl = openssl_encrypt($userfiltetr , "AES-256-CBC" , "@$123@$7_7@&moh@$0/0" , 0 , "1234567812345678");
    setcookie('user'.$a , $useropenssl);
    $emailfilter = filter_var($_POST['emailnew'] , FILTER_VALIDATE_EMAIL);
    $emailopenssl = openssl_encrypt($emailfilter , "AES-256-CBC" , "@$123@$7_7@&moh$0/0" , 0 , "1234567812345678");
    setcookie('email'.$a , $emailopenssl);
    $passfiltetr = strip_tags($_POST['passnew'] , FILTER_VALIDATE_INT);
    $passopenssl = openssl_encrypt($passfiltetr , "AES-256-CBC" , "@$123@$7_7@&moh@$0/0" , 0 , "1234567812345678");
    setcookie('pass'.$a , $passopenssl);
    */
}
?>