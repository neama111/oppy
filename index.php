<?php

if($_POST)
    $name= $_POST['name'];
    $pass= $_POST['pass'];
    $email=$_POST['email'];

require ('cdp.php');
   $query="insert into users ('u_nm','pass','email')value ('$name','$pass','$email')";
   mysqli_query($cdp,$query);

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

<form action="#" method="post">
    user name:
    <input type="text" name="name"><br>

    password:
    <input type="password" name="pass"><br>

    Email:
    <input type="email" name="email"><br>

    <input type="submit" value="save">


</form>

</body>
</html>
