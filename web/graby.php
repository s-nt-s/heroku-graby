<?php
require_once("../vendor/autoload.php");
if (array_key_exists("url", $_GET)) {
    use Graby\Graby;
    
    $article = $_GET['url'];

    $graby = new Graby();
    $result = $graby->fetchContent($article);

    header('Content-type: application/json');
    echo json_encode($result);
}
?>
