<?php
if(!empty($_POST['data'])){
$myfile = fopen('getjson.php', 'w')
fwrite($myfile, $_POST['data']);
fclose($myfile);
}