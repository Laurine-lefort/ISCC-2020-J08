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
    ?>
</body>
<?php include("footer.php"); ?>
</html>
