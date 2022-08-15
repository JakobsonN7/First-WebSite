<?php
session_start();
if((isset($_SESSION['zalogowany']))&& ($_SESSION['zalogowany']== true)){
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta name="descrption" content="Firma budowlana Renomex"/>
	<meta name="keywords" content="firma budowlana, renomex, budowa, budowlanka, "/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Jakub Krajniewski"/>
	<link rel="shortcut icon" href="image/logo.svg">
	<title>Renomex</title>

	<!-- <meta http-equiv="refresh" content="3" /> -->

	<link rel="stylesheet" href="./strona/Style.css">
	<link rel="stylesheet" href="./strona/fontello/css/fontello.css">

</head>
<body>
    <main>
        <form action="zaloguj.php" method="post">
            Login:<br> <input type="text" name="login"/><br>
            Hasło:<br> <input type="password" name="haslo"/> <br>
            <input type="submit" value="Zaloguj"/>

        </form>
        <?php
            if(isset($_SESSION['blad'])){
                echo $_SESSION['blad'];
            }

        ?>
    </main>

</body>
</html>

