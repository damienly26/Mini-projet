<?php
$css = (!isset($_REQUEST['css'])) ? 'css0' : $_REQUEST['css'];
$page = (!isset($_REQUEST['page'])) ? 'accueil' : $_REQUEST['page'];

switch ($page) {
  case 'animations':
    $page="animations";
    $titre="Animations";
    break;
  case 'imagefond':
    $page="imagefond";
    $titre="Image de fond";
    break;
  case 'pageliens':
    $page="pageliens";
    $titre="Liens utiles";
    break;

  // on a une valeur par défaut pour toutes les autres valeurs de page
  default:
    $page="accueil";
    $titre="Accueil";
    break;
}
?>

<html lang="fr">
<head>
  <title><?php echo $titre;?></title>
  <link href="<?php echo "$css.css";?>" rel="stylesheet" type="text/css">
  <meta charset="utf-8"/>
  <script type="text/javascript" src="css1.js"></script>
  <!-- jQuery 1.8 or later, 33 KB -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <!-- Fotorama from CDNJS, 19 KB -->
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
</head>
<body>
<?php

  // inclusion des fichiers
  include "header.php"; // haut de page
//  include "menu.php";// menu
  include "$page.php";// page à inclure en fonction de la vlauer de $page
  include "footer.php"; // bas de page
?>

</body>
</html>
