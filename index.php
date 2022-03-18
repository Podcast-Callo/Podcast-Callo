<?php

//Initialization $url
$GLOBALS['url'] = '';

//Initialization $content
$GLOBALS['content'] = '';

//Initialization $title
$GLOBALS['title'] = '';

//Convert url to array
if (isset($_GET['url'])) {
    $GLOBALS['url'] = explode('/', $_GET['url']);
}

//Routage

try {
  if (($GLOBALS['url'] == '')) { //Home
      require('view/home.php');

  } elseif ($GLOBALS['url'][0] == 'page1') { //Connexion
      require('view/page1.php');

  }elseif ($GLOBALS['url'][0] == 'page2') { //Connexion
          require('view/page2.php');

  } elseif ($GLOBALS['url'][0] == 'page3') { //Connexion
          require('view/page3.php');

  }elseif ($GLOBALS['url'][0] == 'page4') { //Connexion
          require('view/page4.php');

  }elseif ($GLOBALS['url'][0] == 'contact') { //Connexion
          require('view/contact.php');
  }
} catch (\Exception $e) {
  print_r($e);
}


//echo($GLOBALS['url'][0]);

require("view/template.php");
