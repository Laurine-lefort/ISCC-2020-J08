<?php

$name=$_POST['Nom et prénom'];
$mail=$_POST['E-mail'];
$message=$_POST['Message'];

if(empty($name) and empty($mail) and empty($message)){
    echo"<p>Aucunes données reçues.</p>";
}

else
{
echo'<p>Nom et prénom : '. $name.'</p>';
echo'<p>Email: '.$mail.'</p>';
echo'<p>Message: '.$message.'</p>';
}

?>