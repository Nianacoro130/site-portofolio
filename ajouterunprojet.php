<?php
include('navbar.php');
?>

<?php

if(isset($_GET['succes']))
{
   ?> <div class="alert alert-info">
    <strong>Succes</strong> votre projet à bien été ajouté ! 
</div>
<?php
}
?>

<form action="ajoutprojet.php" method="post">
    <div class="container-ajout">
        <div class="card-header Ajout">
            <h3>AJOUTER UN PROJET</h3>
        </div>
        <form>
            <div class="form-group">
                <label>NOM PROJET</label>
                <input type="text" class="form-control" name="nom" placeholder="Nom du projet">
            </div>
            <div class="form-group">
                <label>DATE</label>
                <input type="date" class="form-control" name="date">
            </div>
            <div class="form-group">
                <label>URL IMAGE</label>
                <input type="text" class="form-control" name="image" placeholder="Url de l'image">
            </div>
            <div class="form-group">
                <label>DESCRIPTION</label>
                <textarea  class="form-control" name="description" rows="2" cols="5" placeholder="Description.."></textarea>
            </div>
        </form><br>
        <center><button type="submit" class= "btn btn-success">Ajouter</center> 
    </div>
</form>


<br><br><br><br>
<?php
include('footer.php');
?>