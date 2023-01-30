<h2>Image de fond</h2>

<div class="texte">
  <p>En CSS, nous pouvons ajouter une image de fond à une page, à un header, un texte, etc.
    Nous pouvons ensuite changer le comportement de cette image, avec les propriétés suivantes : </p>

<h3>background-image</h3>
<p>La propriété background-image permet mettre une ou plusieurs images de fond à un élément.
  Sa valeur est : url("nom de l'image.png/jpg/gif"). </p>

<h3>background-attachment</h3>
<p>La propriété background-attachment permet de figer une image de fond
  lorsque l'on descend la page à l’aide de la barre de défilement.
  Les valeurs peuvent être :
  <ul>
    <li><em>fixed</em> : l'image de fond reste fixe</li>
    <li><em>scroll</em> : l'image de fond défile avec le texte (valeur par défaut)</li>
  </ul>
</p>

<h3>background-repeat</h3>
<p>La propriété background-repeat permet de gérer la répétition horizontale
  et/ou verticale de l'image de fond.
  Les valeurs peuvent être :
  <ul>
    <li><em>repeat</em> : l'image se répète (valeur par défaut)</li>
    <li><em>no-repeat</em> : l'image ne se répète pas</li>
    <li><em>repeat-x</em> : l'image se répète sur la 1ère ligne</li>
    <li><em>repeat-y</em> : l'image se répète sur la 1ère colonne</li>
  </ul>
</p>
  <div class="buttonrepeat">
    <p class="button1">no-repeat</p>
    <p class="button2">repeat-x</p>
    <p class="button3">repeat-y</p>
    <p class="button4">repeat</p>
  </div>
  <div id="backrepeat">

  </div>

<h3>background-position</h3>
<p>La propriété background-position permet de positionner l'image de fond par rapport au coin supérieur gauche de l'élément.
Les valeurs peuvent être :
  <ul>
    <li><em>des valeurs en pixel</em></li>
    <li><em>top</em></li>
    <li><em>bottom</em></li>
    <li><em>right</em></li>
    <li><em>left</em></li>
    <li><em>center</em></li>
  </ul>
</p>
  <div class="buttonposi">
    <p class="button1">top</p>
    <p class="button2">bottom</p>
    <p class="button3">left</p>
    <p class="button4">right</p>
  </div>
  <div id="backposi">

  </div>

<h3>background-origin</h3>
<p>La propriété background-origin détermine l'origine de l'image de fond à partir du bord.
Les valeurs peuvent être :
  <ul>
    <li><em>border-box</em> : l'origine est la limite externe de la bordure</li>
    <li><em>padding-box</em> : l'origine est la limite interne de la bordure</li>
    <li><em>content-box</em> : l'origine est l'élément</li>
  </ul>
</p>

<h3>background-clip</h3>
<p>La propriété background-clip permet de gérer les limites de l'image de fond à l'intérieur d'un élément.
  Les valeurs peuvent être :
  <ul>
    <li><em>border-box</em> : l'image s'étend jusqu'à la limite externe de la bordure</li>
    <li><em>padding-box</em> : l'image s'étend jusqu'à la limite interne de la bordure</li>
    <li><em>content-box</em> : l'image est limité à l'élement lui-même</li>
  </ul>
</p>
  <div class="buttonclip">
    <p class="button1">content-box</p>
    <p class="button2">padding-box</p>
    <p class="button3">border-box</p>
  </div>
  <div id="backclip">
    <p class="texteshrek">Shrek, un ogre verdâtre, cynique et malicieux, a élu domicile dans un marécage qu'il croit être un havre de paix. Un matin, alors qu'il sort faire sa toilette, il découvre de petites créatures agaçantes qui errent dans son marais.
Shrek se rend alors au château du seigneur Lord Farquaad, qui aurait soit-disant expulsé ces êtres de son royaume. Ce dernier souhaite épouser la princesse Fiona, mais celle-ci est retenue prisonnière par un abominable dragon.
Il lui faut un chevalier assez brave pour secourir la belle. Shrek accepte d'accomplir cette mission. En échange, le seigneur devra débarrasser son marécage de ces créatures envahissantes.
Or, la princesse Fiona cache un secret terrifiant qui va entraîner Shrek et son compagnon l'âne dans une palpitante et périlleuse aventure.</p>
  </div>

<h3>background-size</h3>
<p>La propriété background-size permet de modifier la taille de l'image de fond.
Les valeurs peuvent être :
  <ul>
    <li><em>auto</em> : taille d'origine de l'image (valeur par défaut)</li>
    <li><em>cover</em> : l'image recouvre tout le fond de l'élément, conserve ses proportions, et peut être tronquée</li>
    <li><em>contain</em> : l'image est redimensionnée pour contenir dans l'élément, et conserve ses proportions</li>
    <li><em>une valeur en %</em></li>
    <li><em>des valeurs en pixels (hauteur et largeur)</em></li>
  </ul>
</p>
  <div class="buttonsize">
    <p class="button1">cover</p>
    <p class="button2">contain</p>
    <p class="button3">50%</p>
    <p class="button4">200px 100px</p>
  </div>
  <div id="backsize">

  </div>

<h3>background</h3>
<p>La propriété background est une propriété raccourcie, qui combine les propriétés listées ci-dessus.</p>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(function(){
    $(".button1").click(function(){
      $("#backrepeat").toggleClass("backrepeat1");
    });
    $(".button2").click(function(){
      $("#backrepeat").toggleClass("backrepeat2");
    });
    $(".button3").click(function(){
      $("#backrepeat").toggleClass("backrepeat3");
    });
    $(".button4").click(function(){
      $("#backrepeat").toggleClass("backrepeat4");
    });
  });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(function(){
    $(".button1").click(function(){
      $("#backposi").toggleClass("backposi1");
    });
    $(".button2").click(function(){
      $("#backposi").toggleClass("backposi2");
    });
    $(".button3").click(function(){
      $("#backposi").toggleClass("backposi3");
    });
    $(".button4").click(function(){
      $("#backposi").toggleClass("backposi4");
    });
  });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(function(){
    $(".button1").click(function(){
      $("#backclip>p").toggleClass("backclip1");
    });
    $(".button2").click(function(){
      $("#backclip>p").toggleClass("backclip2");
    });
    $(".button3").click(function(){
      $("#backclip>p").toggleClass("backclip3");
    });
  });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(function(){
    $(".button1").click(function(){
      $("#backsize").toggleClass("backsize1");
    });
    $(".button2").click(function(){
      $("#backsize").toggleClass("backsize2");
    });
    $(".button3").click(function(){
      $("#backsize").toggleClass("backsize3");
    });
    $(".button4").click(function(){
      $("#backsize").toggleClass("backsize4");
    });
  });
</script>
