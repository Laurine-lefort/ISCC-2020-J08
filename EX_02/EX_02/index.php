<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  </head>
  <?php include("header.php"); ?>
<body>
    <?php
    if($_GET['page'] == 'accueil'){
        include("vitrine-accueil.php");
    }
    elseif($_GET['page'] =='programme'){
        include("vitrine-programme.php");
    }
    elseif($_GET['page'] == 'contact'){
        include("vitrine-contacts.php");
    }
    else {
        include("http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/EX_02/erreur-404.php");
    }
    ?>
</body>
<?php include("footer.php"); ?>
</html>
