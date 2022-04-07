<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.lyceemarcelcallo.org/wp-content/themes/template1/library/images/Logo_marcelcallo.png">
    <title><?= $GLOBALS['title'] ?></title>
  </head>
  <header>
      <div class="logo">Logo</div>
      <div class="bandeau">Bandeau</div>
  </header>
  <body>
    <?php require("view/template/navbar.php"); ?>
    <?= $GLOBALS['content'] ?>

    <footer>
      <?php // require("view/footer.php");?>

    </footer>

  </body>

</html>
