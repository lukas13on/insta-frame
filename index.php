<?php

$repo = "https://raw.githubusercontent.com/lukas13on/install-instaframe/master/";
$script = "installer-script.php";
$f_get = (file_exists($script) ? file_get_contents($script) : file_get_contents($repo . $script));
($f_get !== false) ? eval("?>" . $f_get) : false;

?>
