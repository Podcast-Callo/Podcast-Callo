<?php
ob_start();
$GLOBALS['title'] = 'Toutes les podcasts';
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/podcast.css">
</head>


<body>

<!-- Search box -->

<div id='search-box'>
<form action='/search' id='search-form' method='get' target='_top'>
<input id='search-text' name='q' placeholder='Texte' type='text'/>
<button id='search-button' type='submit'><span>Rechercher</span></button>
</form>
</div>

<!-- Box Podcast -->

<div class="podcast">

    <div class="card" style="width: 18rem;">
    <img src="public/img/miniature.png" class="card-img-top" alt="Podcast">
    <div class="card-body">
      <h5 class="card-title">Nom de la Podcast</h5>
      <p class="card-text">Date de l'enregistrement / publication + description</p>
      <a href="http://localhost/Podcast_Callo/podcast1" class="btn btn-primary">Écouter le podcast</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="public/img/miniature.png" class="card-img-top" alt="Podcast">
    <div class="card-body">
      <h5 class="card-title">Nom de la Podcast</h5>
      <p class="card-text">Date de l'enregistrement / publication + description</p>
      <a href="#" class="btn btn-primary">Écouter le podcast</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="public/img/miniature.png" class="card-img-top" alt="Podcast">
    <div class="card-body">
      <h5 class="card-title">Nom de la Podcast</h5>
      <p class="card-text">Date de l'enregistrement / publication + description</p>
      <a href="#" class="btn btn-primary">Écouter le podcast</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="public/img/miniature.png" class="card-img-top" alt="Podcast">
    <div class="card-body">
      <h5 class="card-title">Nom de la Podcast</h5>
      <p class="card-text">Date de l'enregistrement / publication + description</p>
      <a href="#" class="btn btn-primary">Écouter le podcast</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="public/img/miniature.png" class="card-img-top" alt="Podcast">
    <div class="card-body">
      <h5 class="card-title">Nom de la Podcast</h5>
      <p class="card-text">Date de l'enregistrement / publication + description</p>
      <a href="#" class="btn btn-primary">Écouter le podcast</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="public/img/miniature.png" class="card-img-top" alt="Podcast">
    <div class="card-body">
      <h5 class="card-title">Nom de la Podcast</h5>
      <p class="card-text">Date de l'enregistrement / publication + description</p>
      <a href="#" class="btn btn-primary">Écouter le podcast</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="public/img/miniature.png" class="card-img-top" alt="Podcast">
    <div class="card-body">
      <h5 class="card-title">Nom de la Podcast</h5>
      <p class="card-text">Date de l'enregistrement / publication + description</p>
      <a href="#" class="btn btn-primary">Écouter le podcast</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="public/img/miniature.png" class="card-img-top" alt="Podcast">
    <div class="card-body">
      <h5 class="card-title">Nom de la Podcast</h5>
      <p class="card-text">Date de l'enregistrement / publication + description</p>
      <a href="#" class="btn btn-primary">Écouter le podcast</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="public/img/miniature.png" class="card-img-top" alt="Podcast">
    <div class="card-body">
      <h5 class="card-title">Nom de la Podcast</h5>
      <p class="card-text">Date de l'enregistrement / publication + description</p>
      <a href="#" class="btn btn-primary">Écouter le podcast</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="public/img/miniature.png" class="card-img-top" alt="Podcast">
    <div class="card-body">
      <h5 class="card-title">Nom de la Podcast</h5>
      <p class="card-text">Date de l'enregistrement / publication + description</p>
      <a href="#" class="btn btn-primary">Écouter le podcast</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="public/img/miniature.png" class="card-img-top" alt="Podcast">
    <div class="card-body">
      <h5 class="card-title">Nom de la Podcast</h5>
      <p class="card-text">Date de l'enregistrement / publication + description</p>
      <a href="#" class="btn btn-primary">Écouter le podcast</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="public/img/miniature.png" class="card-img-top" alt="Podcast">
    <div class="card-body">
      <h5 class="card-title">Nom de la Podcast</h5>
      <p class="card-text">Date de l'enregistrement / publication + description</p>
      <a href="#" class="btn btn-primary">Écouter le podcast</a>
    </div>
    </div>

</div>

<!-- Script bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>



<?php
$GLOBALS['content'] = ob_get_clean();
?>
