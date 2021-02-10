<?php include('librairies/bdd.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.halo.min.js"></script>
  

    <title>PROJET</title>
    
</head>
<body>
    <div id="vantarings"></div>
    <script>
        VANTA.HALO({
        el: "#vantarings",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        baseColor: 0x2f40a4,
        backgroundColor: 0x404d8b,
        size: 1.80
        })
    </script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">NIANACORO KONARE</a>
    </button>
    </nav>
    <div class="container-total"> 
    
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
    </div>
    <?php include('footer.php');?>
        </div><!--footer-->   
    </nav>   
</body>
</html>
