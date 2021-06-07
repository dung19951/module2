<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sach khach hang</title>
</head>
<body>
<form action="" method="post">
    <fieldset style="height: 300px;width: 200px  ">
        <h1 style="text-align: center">Login</h1>
        Username:<br>
        <input type="text" name="username"><br>
        Password:<br>
        <input type="password" name="password"><br>
        <button>Sing in</button>
    </fieldset>
    <?php
    if( $_SERVER["REQUEST_METHOD"] =="POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        if($username=="admin"){
            if($password=="admin"){
                echo "Welcome $username to website";
            }
            else{
                echo "login error";
            }
        }
        else{
            echo "login error";
        }
    }
    ?>
</form>
</body>
</html>
