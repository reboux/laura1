<h1>contact</h1>
<?php
require 'frmContact.php';

if (isset($_POST['frmContact'])) {
  echo "je viens du formulaire";
}
else {
  echo "je viens du futur";
}
