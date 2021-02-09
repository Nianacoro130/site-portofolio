<?php
include('navbar.php');
?>

<?php
if(isset ($_GET['id']) && !empty($_GET['id'])){
    $pdo = getPdo();
    $modif = $pdo->query('SELECT * FROM projet where id = ' .$_GET['id']);
    $donnes = $modif->fetch();

 }

 if(isset($_POST['enregistrer']))
 {
    $pdo = getPdo();

    $nom = $_POST['nom'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $date = $_POST['date'];
  
  
    $query = "UPDATE `projet` SET `nom`=:nom,`image`=:image,`description`=:description,`date`=:date";
  
    $pdoResult = $pdo->prepare($query);
  
    $pdoExec = $pdoResult->execute(array(":nom"=>$nom,":image"=>$image,":description"=>$description,":date"=>$date));
  
     if($pdoExec)
     {
         echo 'MAJ OK';
     }else{
         echo 'Màj non prise en compte';
     }
  
 }
  
 ?>

       
                <form action ="modifierunprojet.php" method="POST">
                <div class="container-modif">
                    <div class="card-header modif">
                        <h3>MODIFIER UN PROJET</h3>
                    </div>
                <form>
                        <div class="form-group">
                            <label>NOM PROJET</label>
                            <input type="text" class="form-control" name ="nom" <?php if (!empty($_GET['id'])){?> value=" <?php echo $donnes['nom'];?>"<?php };?>>
                        <div class="form-group">
                            <label>DATE</label>
                            <input type="text" class="form-control" name="date" <?php if (!empty($_GET['id'])){?> value=" <?php echo $donnes['date'];?>"<?php };?>>
                        </div>
                        <div class="form-group">
                            <label>URL IMAGE</label>
                            <input type="text" class="form-control" name="image" <?php if (!empty($_GET['id'])){?> value=" <?php echo $donnes['image'];?>"<?php };?>>
                        <div class="form-group">
                            <label>DESCRIPTION</label>
                            <input type="text" class="form-control" name="description" <?php if (!empty($_GET['id'])){?> value=" <?php echo $donnes['description'];?>"<?php };?>>
                        </div>
                    </form><br>
                    <center><button type="submit" name="enregistrer" class= "btn btn-success">Enregistrer</center> 
                        
                </div>
                </form>';
    
            <?php
   

//  $modif->closeCursor(); // Termine le traitement de la requête

?>
         
<br><br><br><br>

<?php
include('footer.php');
?>