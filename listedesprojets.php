<?php
include('navbar.php');
?>

<?php


$pdo = getPdo();

$reponse = $pdo->query('SELECT * FROM projet');
    
if(isset($_GET['succes']))
{
   echo' <div class="alert alert-info">
    <strong>Succes</strong> votre projet à bien été ajouté ! 
</div>';
}     

        echo '<div class="listeprojet"><table><label>LISTE DES PROJETS</label>';;
            echo '<tr>';
                echo '<th class="thliste">Id</th>';
                echo '<th class="thliste">Nom</th>';
                echo '<th class="thliste">Description</th>';
                echo '<th class="thliste">Image</th>';
                echo '<th class="thliste">Date</th>';
                echo '<th colspan="2" class="thaction">Action</th>';
             echo '</tr>';

            while($donnees = $reponse->fetch()){
                echo '<tr>';
                    echo '<td class="tdliste">' . $donnees['id'] . '</td>';
                    echo '<td class="tdliste">' . $donnees['nom'] . '</td>';
                    echo '<td class="tdliste">' . $donnees['image'] . '</td>';
                    echo '<td class="tdliste2">' . $donnees['description'] . '</td>';
                    echo '<td class="tdliste">' . $donnees['date'] . '</td>';
                    echo '<td> <a href="edit?id=<c:out value="modif">Modifier</a></td>';
                    echo '<td> <a href="delete.php/supprimer?id=' .$donnees['id'] . '" value="delete">Supprimer</a></td>';
                echo '</tr>';
                    }
        echo '</table></div>';
        $pdo = null;

        

        $reponse->closeCursor();       
?>


<br><br><br><br>
<?php
include('footer.php');
?>