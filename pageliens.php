<h2>Liens utiles</h2>
<div class="texte">
  <p>Pour aller plus loin : </p>
<ul>
<?php

$fich="liens.html";
if (!file_exists($fich)) touch($fich);

if (isset($_REQUEST['submit'])) {
  $lien=$_REQUEST['lien'];
  $commentaires=$_REQUEST['commentaires'];
  $f = fopen( $fich, "a+");
  $code="<li><a href=\"$lien\"><b>$commentaires</b> : $lien</a></li>"; //construction du code à insérer
  fputs ($f,$code); //écriture en fin de fichier
  fclose($f);
}

include $fich;
?>
</ul>
  <p>Vous avez d'autres ressources ? Partagez-les avec nous :)</p>
</div>
<div class="texte">
  <form name="form" id="form1" method="post" action="">
    <label>Lien</label>
    <input type="text" name="lien" placeholder="http://site.com" />
    <label>Commentaire du lien</label>
    <input type="text" name="commentaires" />
    <input name="submit" value="Soumettre" type="submit" />
  </form>
</div>
