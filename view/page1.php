<?php
ob_start();
$GLOBALS['title'] = 'Page 1';
?>


<?php
$GLOBALS['content'] = ob_get_clean();
?>
