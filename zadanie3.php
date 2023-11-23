<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="login" name="login">
        <input type="password" placeholder="hasło" name="password">
        <input type="submit" value="zaloguj" name="submit">
    </form>
</body>
<?php
$connection = new mysqli("localhost","root","","formularz");

if($connection->connect_errno!=0)
    echo "Błąd: ".$polaczenie->errno;


else
{
    $login = "SELECT * FROM users WHERE login='$_POST[login]' AND haslo='$_POST[password]'";


    if($query = $connection->query($login))
    {
        $records = $query->num_rows;
        if($records == 0)
        echo "Nieprawidłowy login lub hasło";
        else 
        echo "Zalogowano!";
    }

}
?>
</html>
