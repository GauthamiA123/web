<?php
date_default_timezone_set('Asia/Kolkata');
echo date('d/m/Y==h:i:sA');

$x=$_SERVER['PHP_SELF'];
$t=10;

header("Refresh:$t:url=$x");
?>