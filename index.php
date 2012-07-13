<?php
define('WEBROOT', '/');

if(!isset($_GET['p'])) { $_GET['p'] = "index";}
if(!file_exists("contentPages/". $_GET['p'].".php")) {$_GET['p'] = "404";}

ob_start();

include "contentPages/". $_GET['p'].".php";

$content = ob_get_contents();

ob_end_clean();

include "template.php";



?>
