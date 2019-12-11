<h1>contact</h1>
<?php

if (isset($_POST['frmContact'])) {
  $nom = htmlspecialchars (trim($_POST['nom']));
}

else {
  require 'frmContact.php';
}
