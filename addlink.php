<?php

$lien=$_POST[lien];
$commentaire=$_POST[commentaire];
$css=$_POST[css];

/**********************/
$fich="liens.html";
if (!file_exists($fich)) {touch($fich);} //si le fichier liens.txt n'existe pas il est créé
if ($f = fopen( $fich, "a")) {
    $test=@fopen($lien,'r');
    if ($test) {
      //le lien est valide, on l'insère en fin de fichier
      $code='<li><a href="'.$lien.'"><b>'.$commentaire.'</b> : '.$lien.'</a></li>'; //construction du code à insérer
      fputs ($f,$code); //écriture en fin de fichier
    }
    else {
      echo 'lien non valide : '.$lien;
    };
    fclose($f);
};

echo '<form name="f" action="index.php" method="post">
  <input type="hidden" name="css" value="'.$css.'" />
  <input type="hidden" name="page" value="liens"/>
  <input type="hidden" name="titre" value="Liens utiles"/>
  </form>'

?>
<script language="JavaScript" type="text/JavaScript"> document.f.submit(); </script>
