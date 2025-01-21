<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>login</label><input type="text" name="login"><br><br>
        <label>password</label><input type="password" name="haslo">
        <button type="submit">Submit</button>
    </form>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = "admin";
    $haslo = "test";
    if($login == $_POST["login"] and $haslo == $_POST["haslo"]){
        echo "zalogowano";
    }else{
        echo "złe hasło";
    }
}
?>
