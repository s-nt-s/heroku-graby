<?php
require_once("../vendor/autoload.php");
use Graby\Graby;

if (array_key_exists("url", $_GET)) {
    $article = $_GET['url'];

    $graby = new Graby();
    $result = $graby->fetchContent($article);

    header('Content-type: application/json');
    echo json_encode($result);
}
?>
