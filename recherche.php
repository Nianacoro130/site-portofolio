<?php
include('navbar.php');

    $pdo = getPdo();
	 
	$projet = $pdo->query('SELECT * FROM projet ORDER BY id DESC');
	if(isset($_GET['q']) AND !empty($_GET['q'])) {
	   $q = htmlspecialchars($_GET['q']);
	   $projet = $pdo->query('SELECT nom , id FROM projet WHERE nom LIKE "%'.$q.'%" ORDER BY id DESC');
	   if($projet->rowCount() == 0) {
	      $projet = $pdo->query('SELECT nom FROM projet WHERE CONCAT(nom, description) LIKE "%'.$q.'%" ORDER BY id DESC');
	   }
	}
	?>
	<?php if($projet->rowCount() > 0) { ?>
	   <ul>
        <div class="alert alert-success ">
          <h5>Resultat de la recherche :</h5>
        </div>
	   <?php while($a = $projet->fetch()) { ?>
          <li><a href="detailprojet.php?id=<?= $a['id']; ?>"><?= $a['nom'];?></a></li>
	   <?php } ?>
	   </ul>
	<?php } else { ?>
    <div class="alert alert-Warning ">
      <strong>Erreur</strong> Aucun resultat pour : <?= $q ?>...
    </div>
	<?php } ?>
    
    

<?php
include('footer.php');
?>