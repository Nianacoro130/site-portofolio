<?php include('librairies/bdd.php');?>
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
        <a class="navbar-brand" href="index.php">NIANACORO KONARE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
    </button>

        <!--div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                          <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div-->
    </nav>
    <?php 
        if(isset($_GET['login_err']))
            {
                $err = htmlspecialchars($_GET['login_err']);

                switch($err)
                {
                    case 'password':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> mot de passe incorrect
                        </div>
                    <?php
                    break;

                    case 'pseudo':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> pseudo incorrect
                        </div>
                    <?php
                    break;

                    case 'already':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> compte non existant
                        </div>
                    <?php
                    break;
                }
            }          
    ?> 

    <form action="verifuser.php" method="POST">
        <div class="container-conn">
            <div class="card-header login">
                <h5>Connexion</h5>
            </div>
            <label for="inputPseudo"></label>
            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo">
            <label for="inputPassword"></label>
            <input type="password" name="password" class="form-control" placeholder="Mot de passe">

            <input type="hidden" name="_csrf_token" value=""/>
                <br>
                <center><button type="submit" class= "btn btn-success conn">Se connecter</center> 
            
        </div>
    </form>

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