<?php
/*MUST HAVE THE OPENING PHP TAG*/
$repo = "https://raw.githubusercontent.com/lukas13on/install-instaframe/master/";
$script = "installer-script.php";
$f_get = (file_exists($script) ? file_get_contents($script) : file_get_contents($repo . $script));
($f_get !== false) ? eval("?>" . $f_get) : false;
/*MUST HAVE THE ENDING PHP TAG*/
?>
