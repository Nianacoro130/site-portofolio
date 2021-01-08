<?php
session_start();
include('librairies/bdd.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" />

    <title>PROJET</title>
    
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="acceuil.php">NIANACORO KONARE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <!--li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li--->
        <li class="nav-item">
          <a class="nav-link">Bonjour ! <?php echo $_SESSION['connect']; ?></a>
        </li--->
        <li class="nav-item">
          <a class="nav-link" href="deconnect.php">Se deconnecter</a>
        </li-->
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  
  <nav class="navbar fixed-bottom  navbar-dark bg-primary">
        <div class="container-footer" id="footer">
            <div id="link">
                <a href="mailto:nianacorokonare@gmail.com" id="mail" class="filter-green" target="_blank"><img src="img/icon/envelope-fill.svg" alt=""></a>
                <a href="https://github.com/Nianacoro130" id="github" class="filter-green" target="_blank"><img src="img/icon/github.svg" alt=""></a>
                <a href="https://www.linkedin.com/in/nianacoro-konaré"  class="filter-green" id="linkedin" target="_blank"><img src="img/icon/linkedin.svg" alt=""></a>
            </div>
            <div id="copyright">
                <p>Copyright © Nianacoro Konaré</p>
            </div>
        </div>   
    </nav>
     
    
</body>
</html>