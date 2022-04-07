<?php

//Initialization $url
$GLOBALS['url'] = '';

//Initialization $content
$GLOBALS['content'] = '';

//Initialization $title
$GLOBALS['title'] = '';

//Initialization $src (source de la podcast)
$GLOBALS['src'] = '';

//Convert url to array
if (isset($_GET['url'])) {
    $GLOBALS['url'] = explode('/', $_GET['url']);
}

//Routage

try {
  if (($GLOBALS['url'] == '')) { //Home
      require('view/page/home.php');

  } elseif ($GLOBALS['url'][0] == 'podcast') {
      require('view/page/podcast.php');

  }elseif ($GLOBALS['url'][0] == 'page2') {
          require('view/page/page2.php');

  } elseif ($GLOBALS['url'][0] == 'page3') {
          require('view/page/page3.php');

  }elseif ($GLOBALS['url'][0] == 'page4') {
          require('view/page/page4.php');

  }elseif ($GLOBALS['url'][0] == 'contact') {
          require('view/page/contact.php');

  }elseif ($GLOBALS['url'][0] == 'responsive') {
          require('view/responsive.php');

  }elseif ($GLOBALS['url'][0] == 'template_podcast') {
          require('view/template/template_podcast.php');

  }elseif ($GLOBALS['url'][0] == 'equipe') {
          require('view/page/equipe.php');

    

}

// test




//

} catch (\Exception $e) {
  print_r($e);
}


// rechercher nom + description d'un fichier audio dans le dossier
// rechercher le nom du mp3 dans l'url (methode get)
// rechercher dans le fichier "audio"
// remplacer dans home.php la dernière podcast

//echo($GLOBALS['url'][0]);

require("view/template/template.php");
