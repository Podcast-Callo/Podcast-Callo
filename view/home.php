<?php
ob_start();
$GLOBALS['title'] = 'Podcats Callo';
 ?>

<head>
  <!-- Docs styles -->
<link rel="stylesheet" href="public/css/audio.css" />
</head>


<body>


<!-- colonne droite -->

<div class="colonne_info">
  <p>Praeceps truculenti viam autem ut reducere haec lenitate similia autem feminea exitium deberet admovente ut truculenti ut feminea suadendo erga rettulimus haec autem regina truculenti admovente illius multa ut humanitatisque potius erga actibus veritatis quae regina similia feminea suadendo regina erga fortunas illius autem rettulimus actibus rettulimus mariti humanitatisque ad deberet feminea propositum scrutanda regina potius in stimulos ut exitium imperatoris reducere Maximini exitium praeceps mariti imperatoris fortunas suadendo suadendo Maximini cum haec trudebat feminea exitium scrutanda lenitate in actibus obstinatum multa scrutanda fortunas in ad ad admovente haec trudebat suadendo eum autem similia Maximini Maximini multa ut ad obstinatum. Si per clivos sublimes hoste firmare lapsantibus fortiter prensando sublimes arta nostri aut prensando aliquotiens pedites nullas ponderum lapsantibus prensando permissi necessitate nostri ponderum rupium fruticeta per periculose
  </p>
</div>

<!-- Fin colonne droite -->

<audio controls id="player">
    <source src="https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.ogg" type="audio/ogg">
    <source src="https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3" type="audio/mpeg">
    Your browser does not support the audio element.-- CodeXD - India
</audio>

<script src="https://cdn.jsdelivr.net/gh/CDNSFree2/Plyr/plyr.min.js"></script>

</body>
 <?php
$GLOBALS['content'] = ob_get_clean();
?>
