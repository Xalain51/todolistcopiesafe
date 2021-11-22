<?php if (!isset($_GET["task_id"]) || empty($_GET["task_id"])) {
    header("Location: ./index.php");
    die();
}

require_once("./config.php");

$sql = "UPDATE tasks SET deleted_at = ? WHERE id = ?";
$req = $db->prepare($sql);
$req->bindValue(1,  $date->format('Y-m-d H:i:s'));
$req->bindValue(2, $_GET["task_id"]);

if ($req->execute()) {
    header("Location: index.php");
} else {
    echo "error";
}
