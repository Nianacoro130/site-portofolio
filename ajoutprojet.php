<?php
require('librairies/bdd.php');

if(isset($_POST['nom']) && isset($_POST['image']) &&  isset($_POST['description']) && isset($_POST['date'])){

$nom =$_POST['nom'];
$image=$_POST['image'];
$description=$_POST['description'];
$date= $_POST['date'];


$pdo = getPdo();

$ajout =$pdo->query("INSERT INTO projet (nom,image,description,date)

    VALUES ('$_POST[nom]','$_POST[image]','$_POST[description]','$_POST[date]')") or die($pdo->error);

header('Location: ajouterunprojet.php?succes');


$ajout->closeCursor(); 
}



?>