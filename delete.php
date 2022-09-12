<?php
$user = "noguchi";
$pass = "kztk3021";

if (empty($_GET["id"])) {
    echo "IDを正しく入力してください。";
    exit;
}

try {
    $id = (int)$_GET["id"];
}
?>