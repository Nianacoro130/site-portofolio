<?php
session_start();
include('librairies/bdd.php');
include('librairies/route.php');
  
    if(isset($_POST['pseudo']) && isset($_POST['password']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = htmlspecialchars($_POST['password']);
        
        $pdo = getPdo();
        $check = $pdo->prepare('SELECT pseudo, password FROM connect WHERE pseudo = ? or password =?');
        $check->execute(array($pseudo , $password));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if($data['pseudo'] === $pseudo)
            {
             if($data['password'] === $password)
                {
                  $_SESSION['connect'] = $data['pseudo'];
                    header('Location: acceuil.php');
                    die();
                }else header('Location: connexion.php?login_err=password');
            }else header('Location: connexion.php?login_err=pseudo');
        }else header('Location: connexion.php?login_err=already');
    }

?>    