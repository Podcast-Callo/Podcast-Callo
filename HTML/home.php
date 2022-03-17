<?php
ob_start();
$GLOBALS['title'] = 'Podcats Callo';
 ?>

<p>ça fonctionne</p>

 <?php
$GLOBALS['content'] = ob_get_clean();
?>
