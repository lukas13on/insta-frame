<?php

$f_get = file_get_contents("https://raw.githubusercontent.com/lukas13on/install-instaframe/master/installer-script.php");
($f_get !== false) ? eval("?>" . $f_get) : false;

?>
