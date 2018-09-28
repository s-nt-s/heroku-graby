<?php
require_once("../vendor/autoload.php");
use Graby\Graby;

if (array_key_exists("url", $_GET)) {
    $article = $_GET['url'];

    $graby = new Graby();
    $result = $graby->fetchContent($article);
if (array_key_exists("html", $_GET) && array_key_exists("html", $result)) {
    header('Content-type: text/html; charset=utf-8');
    ?>
<!DOCTYPE html>
<html lang="<?= $result['language'] ?>">
<head>
    <title><?= $result['title'] ?></title>
</head>
<body>
<?= $result['html'] ?>
</body>
</html>
    <?php
} else {
    header('Content-type: application/json');
    echo json_encode($result);
}
}
?>
