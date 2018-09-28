<?php
if (array_key_exists("url", $_GET)) {
    require_once("../vendor/autoload.php");
    use Graby\Graby;
    
    $article = $_GET['url'];

    $graby = new Graby();
    $result = $graby->fetchContent($article);

    header('Content-type: application/json');
    echo json_encode($result);
}
?>
