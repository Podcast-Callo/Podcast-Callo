<?php
ob_start();
$GLOBALS['title'] = 'Nous contacter';
?>

<div class="background">
<p>Coucou</p>
</div>

<?php
$GLOBALS['content'] = ob_get_clean();
?>
