<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/style.css">
    <title><?= $GLOBALS['title'] ?></title>
  </head>
  <header>
      <div class="logo">Logo</div>
      <div class="bandeau">Bandeau</div>
  </header>
  <body>
    <?php require("view/navbar.php"); ?>
    <?= $GLOBALS['content'] ?>

    <footer>
      <?php require("view/footer.php");?>

    </footer>

  </body>

</html>
