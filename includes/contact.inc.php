<h1>contact</h1>
<?php

if (isset($_POST['frmContact'])) {
  $nom = htmlspecialchars (addslashes(urldecode(trim($_POST['nom']))));
}

else {
  require 'frmContact.php';
}
