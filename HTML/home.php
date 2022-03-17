<?php
ob_start();
 ?>

<p>page homeeee</p>

 <?php
$GLOBALS['content'] = ob_get_clean();
?>
