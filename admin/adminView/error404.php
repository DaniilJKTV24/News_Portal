<?php
ob_start();
?>

<h2>Error 404</h2>
<article>
  <h3>Error 404 - what is it?</h3>
  <p>The requested URL could not be found.</p>
</article>

<?php
$content = ob_get_clean();
include "adminView/templates/layout.php";
?>