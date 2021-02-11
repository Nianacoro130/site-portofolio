<?php
include('navbar.php');
?>
<?php
$pdo = getPdo();
$reponse = $pdo->query('SELECT * FROM projet' );


while ($donnees = $reponse->fetch()){
    $date = date_create($donnees['date']);

?>

<div class="containerp">
    <div class="item">
        <h4 class="card-header"> <?php echo $donnees['nom']; ?></h4>
        <div class="card-body">
            <h6 class="card-subtitle text-muted"> <?php echo date_format($date, 'd-m-Y à H:i:s'); ?></h6>
        </div>
        <a href="detailprojet.php?id=<?php echo $donnees['id']; ?>">
        <img src="<?php echo $donnees['image']; ?>" alt= "image projet" width="100%" height="200" style="font-size:1.125rem;text-anchor:middle">
            <rect width="100%" height="100%" fill="#868e96"></rect></a>
        
        <div class="card-body">
             <p class="card-text"><?php echo $donnees['description']; ?></p>
        </div>
        <!-- <a href="detailprojet.php?id=" class="btn btn-info">Lire</a> -->
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