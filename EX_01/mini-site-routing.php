<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>mini-site-routing</title>
</head>
<body>
    <?php
    if($_GET['page'] == 1){
       echo'<h1>Accueil !</h1>';
       
    }
    elseif($_GET['page'] ==2){
        echo'<h1>Page 2!</h1>';
    }
    elseif($_GET['page'] ==3){
        echo'<h1>Page 3</h1>';
    }
    ?>
</body>
</html>
