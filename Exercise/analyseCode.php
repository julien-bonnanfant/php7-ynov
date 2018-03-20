<?php
$files = file_get_contents(argv[1]);
var_dump($files);

$nombreA = substr_count($files, 'a');
var_dump ($nombreA);

$arrayfiles = file ( $filename);
var_dump($arrayfiles);
?>
