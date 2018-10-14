<?php
    $flag=false;
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['username'];
        $p=$_POST['pwd'];
        if ($name=='admin'&&$p=='1111'){
            $flag=true;
            echo "登录成功";
        }else{
            $flag=false;
        }
    }else {

    }
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        if($flag==false){
    ?>
    <form action="login.php" method="post">
        用户名： <input type="text" name="username"><br>
        密码： <input type="password" name="pwd"><br>
        <input type="submit" value="登录">
    </form>
            <?php
            if ($_SERVER['REQUEST_METHOD']=='POST') {

                    echo "用户名或密码错误";
                }

            ?>
    <?php
        }
    ?>
</body>
</html>