<?php
include('navbar.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){
    $pdo = getPdo();
    $stmt= $pdo->query('SELECT * FROM projet WHERE id = ' .$_GET['id']);
     if($stmt->rowCount() == 1) {
        $stmt = $stmt->fetch();
        $nom = $stmt['nom'];
        $image = $stmt['image'];
        $description = $stmt['description'];
        $date = $stmt['date'];
        $dateMySQL = $date;
        $date = new DateTime($dateMySQL);
        //affichage de la date au format francophone:
         
    }

    
}

?> 
     

<section class="articles">
        <article>
            <h2><?php echo $nom;?></h2>
            <div class="metadata">Ecrit le <?php echo $date->format('d/m/Y à H:i:s'); ?></div>
            <div class="content">
                <img src="<?php echo $image; ?>" alt="">
                <?php echo $description ;?>  
            </div>
        </article>
</section>


<?php
include('footer.php');
?>