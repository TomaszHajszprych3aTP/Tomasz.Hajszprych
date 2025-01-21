<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="" method="post">
        <label>Wprowadź login</label><input name="login" type="text"><br><br>
        <label>Wprowadź hasło</label><input name="haslo" type="password"><br><br>
        <button type="submit">Wyślij</button>
    </form>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = "login";
    $haslo = "password";
    if($login == $_POST["login"] and $haslo == $_POST["haslo"]){
        echo "zalogowano";
    }else{
        echo "złe hasło";
    }
}
?>
