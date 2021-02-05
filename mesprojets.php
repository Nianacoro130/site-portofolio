<?php
include('navbar.php');
?>
<?php
$pdo = getPdo();
$reponse = $pdo->query('SELECT * FROM projet' );
// $donnees = $reponse->fetch();

while ($donnees = $reponse->fetch()){

?>
<div class="containerp">
    <div class="item">
        <h4 class="card-header"> <?php echo $donnees['nom']; ?></h4>
        <div class="card-body">
            <h6 class="card-subtitle text-muted"> <?php echo $donnees['date']; ?></h6>
        </div>
        <svg xmlns="<?php echo $donnees['image']; ?>"  width="100%" height="200" style="font-size:1.125rem;text-anchor:middle">
            <rect width="100%" height="100%" fill="#868e96"></rect>
        </svg>
        <div class="card-body">
             <p class="card-text"><?php echo $donnees['description']; ?></p>
        </div>
        <a href="detailprojet.php?id_projet=<?php echo $donnees['id']; ?>" class="btn btn-info">Lire</a>
    </div> 
</div>

<?php

}    

 $reponse->closeCursor(); // Termine le traitement de la requête


?>
<br><br><br><br>
<?php
include('footer.php');
?>