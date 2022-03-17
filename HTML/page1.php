<?php
ob_start();
?>

<div class="background">
<p>Coucou</p>
</div>

<?php
$GLOBALS['content'] = ob_get_clean();
?>
