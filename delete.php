<?php
require('librairies/bdd.php');


if(isset($_GET['id']) AND !empty($_GET['id'])){

$pdo = getPdo();

$supp= $pdo->prepare("DELETE  FROM projet  where id = ?");
$supp->execute(array($_GET['id']));
// var_dump($supp);

echo "Vous avez supprimer le projet n° " .$_GET['id'];


// header('Location: \listedesprojets.php?succes');



}
else {
    echo " erreur projet non supprime";
}

$supp->closeCursor(); 


?>

