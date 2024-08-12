<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user registration</title>
</head>
<body>
   <form action='' method='post'>
    <fieldset>
        <legend>
            user login
</legend>
<input type="text" name="user" placeholder="username"><br>
<input type="password" name="pass" placeholder="Password"><br>
<input type="submit" name="submit" value="login"><br>
</fieldset>
</form>
<?php
if(isset($_POST["submit"])){
    $username=$_POST["user"];
    $password=$_POST["pass"];
    if($username=="admin" and $password=="admin123"){
        header("Location: admin/dashboard.php");

    }
    else {
        echo "wrong username or password";
    }
}
?>

</body>
</html>