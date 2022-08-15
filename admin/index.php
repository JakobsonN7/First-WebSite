<?php
ini_set("display_errors", 0);
session_start();
require_once "connect.php";
extract($_REQUEST);
if(!isset($_SESSION['zalogowany'])){
    header('Location: logowanie.php');
    exit();
}
//var_dump($_POST);
if( isset ($_POST) & $_POST['upload']==1){
	$max_rozmiar = 2512*1512;
	if (is_uploaded_file($_FILES['plik']['tmp_name'])) {
		if ($_FILES['plik']['size'] > $max_rozmiar) {
			echo 'Błąd! Plik jest za duży!';
		} else {
			$nazwa_pliku=$_FILES['plik']['name'];
			echo 'Odebrano plik. Początkowa nazwa: '.$nazwa_pliku;
			echo '<br/>';
			if (isset($_FILES['plik']['type'])) {
				echo 'Typ: '.$_FILES['plik']['type'].'<br/>';
			}
			move_uploaded_file($_FILES['plik']['tmp_name'],
					$_SERVER['DOCUMENT_ROOT'].'/strona/foto/'.$nazwa_pliku);
		}
	
	$query="INSERT INTO `artykuly` (`id`, `tytul`, `tekst`, `data`, `autor`, `zdjecie`) VALUES (NULL, '$tytul', '$tekst', current_timestamp(), '$autor', '$nazwa_pliku')";
		
	$update=$db->query($query) or die ('Błąd dodania artykułu. '.$db->error);

	$original_dimensions = getimagesize('../foto/'.$nazwa_pliku);
	$width = $original_dimensions[0];
	$height = $original_dimensions[1];
	
	$small = imagecreatetruecolor(100, 100);
	$source = imagecreatefromjpeg('../foto/'.$nazwa_pliku);
	imagecopyresized($small, $source, 0, 0, 0, 0, 100, 100, $width, $height);
	imagejpeg($small, '../foto/'.$nazwa_pliku);

	} else {
	echo 'Błąd przy przesyłaniu danych!';
}
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
	<link rel="shortcut icon" href="./strona/image/logo.svg">
	<title>Renomex</title>

	<!-- <meta http-equiv="refresh" content="3" /> -->

	<link rel="stylesheet" href="./strona/Style.css">
	<link rel="stylesheet" href="./strona/fontello/css/fontello.css">

</head>
<body>
    <main>
<?php
            echo "<p>Witaj ".$_SESSION['user'].'! [<a href="logout.php"> Wyloguj </a>]</p>';
       ?>

	<form action="" method="post" ENCTYPE="multipart/form-data">
		<div>
			Autor:<br />
			<input type="text" name="autor" value="" /><br />
			Tytuł:<br />
			<input type="text" name="tytul" value="" /><br />
			Tekst:<br />
			<textarea class="ezz" name="tekst"></textarea><br />
		</div>
		<div>
			Zdjęcie:<br />
			<input type="hidden"  name="upload" value="1">
			<input type="file"    name="plik"/><br/>
			<input type="submit" value="Wyślij plik"/>
		</div>
		<!-- <div>
			<input type="checkbox" value="checked" name="mailing" />Chcę otrzymywać informacje handlowe<br /><br />
			<input type="submit" value="Wyślij" name="submit" />
		</div> -->
 	</form>
    </main>
</body>
</html>