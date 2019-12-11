<h1>contact</h1>
<?php

if (isset($_POST['frmContact'])) {
  $nom = checkInput($_POST['nom']);
  $prenom = checkInput($_POST['prenom']) ;
  $mail = checkInput($_POST['mail']);
  $msg = checkInput($_POST['msg']);

$erreur = array();

if ($nom === "")
  array_push($erreur, "veuillez saisir votre nom");

  if ($prenom === "")
    array_push($erreur, "veuillez saisir votre prenom");

    if ($mail === "")
      array_push($erreur, "veuillez saisir votre email");

      if ($msg === "")
        array_push($erreur, "veuillez saisir votre message");

  if (count($erreur) > 0) {
    $message = '<ul>';

  for($i = 0 ; $i < count($erreur) ; $i++) {
    $message .= '<li>';
    $message .= $erreur[$i];
    $message .= '</li>';
  }
   $message .= '</ul>';
   echo $message;
   require 'frmContact.php';
}
     else {
    echo "insertion en BDD";
  }
}
else {
  require 'frmContact.php';
}
