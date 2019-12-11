<main>
  <?php
  //$page = isset($_GET['page']) : 'accueil';
//veut dire la même chose que en dessous cela permet d'obtenir l'url de la page au survole des liens (s'affiche en bas à droite)
$path ='./includes/';
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';
$page = $path . $page . '.inc.php';

$tableauFichiers = glob($path . '*.inc.php');

  if (in_array($page, $tableauFichiers)) {
     require $page;
   }
  else {
    require $path . 'accueil.inc.php';
  }
   ?>
</main>
