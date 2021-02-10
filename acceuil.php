<?php
session_start();
include('librairies/bdd.php');?>

<div class="loader_bg">
  <div class="loader"></div>
</div>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
   

    <title>PROJET</title>
    
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">NIANACORO KONARE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <!--li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li-->
        <li class="nav-item">
          <a class="nav-link"><?php echo $_SESSION['connect']; ?>, est connecté !</a>
          <span class="sr-only">(current)</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deconnect.php">Se deconnecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mesprojets.php">Projets</a>
        </li>
        <?php  if( $_SESSION['connect'] == 'admin'){ 
         ?><li class="nav-item">
          <a class="nav-link" href="ajouterunprojet.php">Ajouter</a>
        </li><?php
        }?>
        <?php  if( $_SESSION['connect'] == 'admin'){ 
         ?><li class="nav-item">
          <a class="nav-link" href="listedesprojets.php">Modifier</a>
        </li><?php
        }?>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class = "container" id="cv">
   <div class="description">
    <div>
      <h2>Développeur Web </h2>
      <h3>HTML / CSS / Javascript / PHP /JAVA /MYSQL</h3>
        <a href="upload/CV_Nianacoro Konare CDAP.pdf" target="_blank" class="btn btn-primary">Télécharger le CV</a>
    </div>
  </div>
</div>

<!-- <div class="arrow-wrapper">
    < <div class="arrow-up"></div> -->
    <!-- <div class="arrow-right"></div> -->
    <!-- <div class="arrow-down"></div> -->
    <!-- <div class="arrow-left"></div> -->
<!-- </div> --> 
  <?php include('footer.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  setTimeout(function(){
    $('.loader_bg').fadeToggle();
  }, 1500);


</script>
</body>
</html>