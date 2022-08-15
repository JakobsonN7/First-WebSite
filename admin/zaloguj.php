<?php
    session_start();
    
    if((!isset($_POST['login'])) || (!isset($_POST['haslo']))){
        header('Location: logowanie.php');
        exit();
    }

    require_once "connect.php";
    
    if($db->connect_errno!=0){
        echo "Error: ".$db->connect_errno;
    }
    else{
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];

        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");

        

        if($rezultat = @$db->query(
            sprintf("SELECT * FROM uzytkownicy WHERE user='%s' AND pass='%s'",
            mysqli_real_escape_string($db, $login),
            mysqli_real_escape_string($db, $haslo)
            ))){
            $ile_uzyt = $rezultat->num_rows;
            if($ile_uzyt>0){
                $_SESSION['zalogowany']=true;
                $wiersz = $rezultat-> fetch_assoc();
                $_SESSION['id']= $wiersz['id'];
                $_SESSION['user'] = $wiersz['user'];
                $_SESSION['pass'] = $wiersz['pass'];
                $_SESSION['email'] = $wiersz['email'];

                unset($_SESSION['blad']);
                $rezultat->free_result();
                header('Location: index.php');
            }
            else{
                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub haslo!</span>';
                header('Location: logowanie.php');


            }
        }

        $db->close();
    }



?>
