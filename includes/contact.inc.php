<h1>contact</h1>
<?php

if (isset($_POST['frmContact'])) {
  echo "je viens du formulaire";
}

else {
  require 'frmContact.php';
}
