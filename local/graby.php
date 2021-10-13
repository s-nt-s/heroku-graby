#!/usr/bin/env php
<?php
require_once("vendor/autoload.php");

use Graby\Graby;

$article = $argv[1];

$graby = new Graby();
$result = $graby->fetchContent($article);

echo json_encode($result);
?>
