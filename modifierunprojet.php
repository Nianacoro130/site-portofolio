<?php
include('navbar.php');
?>

<?php
if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $pdo = getPdo();
    $get_id = htmlspecialchars($_GET['id']);
  
     $stmt = $pdo->prepare('SELECT * FROM projet WHERE id = ?');
     $stmt->execute(array($get_id));
  
         // Vérification que l'article existe bien
         if($stmt->rowCount() == 1) {
         $stmt = $stmt->fetch();
         $nom = $stmt['nom'];
         $image = $stmt['image'];
         $description = $stmt['description'];
         $date = $stmt['date'];
        
         //..
     }
 }

 if (empty($errors) && isset($_POST['enregistrer'])) {
     $pdo = getPdo();
     $stmt = $pdo->prepare("UPDATE projet SET
                             nom = :nom,
                             image = :image,
                             description = :description,
                             date = :date
                             WHERE id = :id");
  
     $stmt->execute(array(
                      'id' => $get_id,
                     'nom' => $_POST['nom'],
                     'image' => $_POST['image'],
                     'description' => $_POST['description'],
                     'date' => $_POST['date'],
                     ));
  
 
        if($stmt)
            {
            // echo 'MAJ OK';
            ?> <div class="alert alert-info">
           <strong>Succes</strong> votre projet à  été mise à jour  ! 
           </div><?php
        }else{
             echo 'Màj non prise en compte';
             ?> <div class="alert alert-info">
           <strong>Erreur</strong> votre projet n'a pas été mise à jour ! 
           </div><?php
        }

                
                        
     // Redirection vers ma page index.php
     // header('Location: index.php');
 }
  
?>

        <form  method="POST">
        <div class="container-modif">
            <div class="card-header modif">
                <h3>MODIFIER UN PROJET</h3>
            </div>
            <form>
                <div class="form-group">
                    <label>NOM PROJET</label>
                    <input type="text" class="form-control" name="nom" value="<?php echo  $nom;?>">
                </div>
                <div class="form-group">
                    <label>DATE</label>
                    <input type="text" class="form-control" name="date" value="<?php echo $date;?>">
                </div>
                <div class="form-group">
                    <label>URL IMAGE</label>
                    <input type="text" class="form-control" name="image"  value="<?php echo  $image;?>">
                </div>
                <div class="form-group">
                    <label>DESCRIPTION</label>
                    <input type="text" class="form-control" name="description" value="<?php echo  $description;?>">
                </div>
            </form><br>
            <center><button type="submit" name="enregistrer" class= "btn btn-success">Enregistrer</center> 
        </div>
        </form>
   
         
<br><br><br><br>

<?php
include('footer.php');
?>