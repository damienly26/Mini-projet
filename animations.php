<h2>Animations</h2>
<div class="texte">
  <p>En CSS, nous pouvons créer des animations, par exemple pour changer la couleur ou la position d'un élément, le faire bouger, etc.</p>
  <h3>Quelques propriétés d’animations présentes en CSS</h3>
  <p>
    <strong>@keyframes</strong> : La règle keyframes permet aux codeurs de définir les étapes qui composent la séquence d'une animation CSS. Cette règle permet de contrôler une animation plus finement que ce qu'on pourrait obtenir avec les transitions.
    Exemple :
    <pre class="code1">
    /* Le code de l’animation */
    @keyframes exemple {
      from {background-color: red;}
      to {background-color: yellow;}
    }

    /* L’élément auquel on applique l’animation */
    div {
      width: 100px;
      height: 100px;
      background-color: red;
      animation-name: exemple;
      animation-duration: 4s;
    }</pre>

  </p>
  <p><strong>animation-name</strong> : Permet de déclarer un <em>nom</em>
    qui pourra être utilisé comme référence à l'animation pour la règle @keyframes.</p>
  <p><strong>animation-duration</strong> : Définie la durée d’un cycle d’animation.</p>
  <p><strong>animation-delay</strong> : Spécifie un délai pour le démarrage d'une animation.
    Dans l'exemple suivant, le délai avant le démarrage de l'animation est de 2 secondes (cette valeur peut également être négative) :
    <pre class="code2">
      div {
        width: 100px;
        height: 100px;
        position: relative;
        background-color: red;
        animation-name: exemple;
        animation-duration: 4s;
        animation-delay: 2s;
      }
</pre>
  </p>
  <p><strong>animation-iteration-count</strong> : Indique le nombre de fois qu'une animation doit être exécutée.</p>
  <p><strong>animation-direction</strong> : Indique si l'animation doit alterner entre deux directions de progressions (faire des allers-retours)
    ou recommencer au début à chaque cycle de répétition. Cette propriété peut avoir les valeurs suivantes :
    <ul>
      <li><em>normal</em> : L'animation est jouée normalement, en avant. (valeur par défaut).</li>
      <li><em>reverse</em> : L'animation est jouée à l'envers, en arrière.</li>
      <li><em>alternate</em> : L'animation est jouée d'abord en avant, puis en arrière.</li>
      <li><em>alternate-reverse</em> : L'animation est jouée d'abord en arrière, puis en avant.</li>
    </ul>
  </p>
  <p><strong>animation-timing-function</strong> : Spécifie la courbe de vitesse de l'animation.
    Cette propriété peut avoir les valeurs suivantes :
    <ul>
      <li><em>ease</em> : Spécifie une animation avec un démarrage lent, puis rapide, puis une fin lente (valeur par défaut).</li>
      <li><em>linear</em> : Spécifie une animation dont la vitesse est la même du début à la fin.</li>
      <li><em>ease-in</em> : Spécifie une animation avec un démarrage lent.</li>
      <li><em>ease-out</em> : Spécifie une animation avec une fin lente.</li>
      <li><em>ease-in-out</em> : Spécifie une animation avec un démarrage et une fin lents.</li>
      <li><em>cubic-bezier(n,n,n,n)</em> : Permet de définir vos propres valeurs dans une fonction cubic-bezier,
        à l'aide de quatre coefficients compris entre 0 et 1.</li>
    </ul>
  </p>
  <p><strong>animation-fill-mode</strong> : Spécifie un style pour l'élément cible lorsque l'animation n'est pas jouée
    (avant qu'elle ne commence, après qu'elle se termine, ou les deux).
  </p>
  <p><strong>animation</strong> : C’est une propriété raccourcie pour définir toutes les propriétés d'animation listées ci-dessus.</p>
  <br>
  <p>Voici quelques exemples :</p>
</div>
  <br>
  <br>

<div class="buttonanim">
  <p class="button1">animation-duration: 5s</p>
  <p class="button2">animation-delay : 2s</p>
  <p class="button3">animation-direction : alternate-reverse</p>
  <p class="button4">animation-timing-function : ease-in-out</p>
</div>

<!-- Images css1 -->
<div id="anim1">
  <div id="moses"></div>
  <div id="mer1"></div>
  <div id="mer2"></div>
</div>

<!-- Images css2 -->
<div id="anim2">
  <div id="fiona"></div>
  <div id="ogre"></div>
</div>

<!-- Images css3 -->
<div id="anim3">
  <div id="panda"></div>
  <div id="bambou"></div>
</div>

<!-- Images css4 -->
<div id="anim4">
  <div id="robot"></div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(function(){
    $(".button1").click(function(){
      $("#mer1").toggleClass("meranim1");
    });
    $(".button2").click(function(){
      $("#mer1").toggleClass("meranim2");
    });
    $(".button3").click(function(){
      $("#mer1").toggleClass("meranim3");
    });
    $(".button4").click(function(){
      $("#mer1").toggleClass("meranim4");
    });
  });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(function(){
    $(".button1").click(function(){
      $("#fiona").toggleClass("htog1");
      $("#ogre").toggleClass("gtoh1");
    });
    $(".button2").click(function(){
      $("#fiona").toggleClass("htog2");
      $("#ogre").toggleClass("gtoh2");
    });
    $(".button3").click(function(){
      $("#fiona").toggleClass("htog3");
      $("#ogre").toggleClass("gtoh3");
    });
    $(".button4").click(function(){
      $("#fiona").toggleClass("htog4");
      $("#ogre").toggleClass("gtoh4");
    });
  });

</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(function(){
    $(".button1").click(function(){
      $("#bambou").toggleClass("bambouanim1");
    });
    $(".button2").click(function(){
      $("#bambou").toggleClass("bambouanim2");
    });
    $(".button3").click(function(){
      $("#bambou").toggleClass("bambouanim3");
    });
    $(".button4").click(function(){
      $("#bambou").toggleClass("bambouanim4");
    });
  });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(function(){
    $(".button1").click(function(){
      $("#robot").toggleClass("robotanim1");
    });
    $(".button2").click(function(){
      $("#robot").toggleClass("robotanim2");
    });
    $(".button3").click(function(){
      $("#robot").toggleClass("robotanim3");
    });
    $(".button4").click(function(){
      $("#robot").toggleClass("robotanim4");
    });
  });
</script>
