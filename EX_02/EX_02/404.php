<?php
switch($_GET['code'])
{
case '404':header('Location: http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/EX_02/erreur-404.php');
break;
default:header('Location: http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/EX_02/');
}
?>