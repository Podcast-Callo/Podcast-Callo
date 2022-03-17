<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/style.css">
    <title><?= $GLOBALS['title'] ?></title>
  </head>
  <body>
    <?php require("HTML/navbar.php"); ?>
    <?= $GLOBALS['content'] ?>
  </body>

</html>
