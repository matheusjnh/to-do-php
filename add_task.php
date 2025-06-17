<?php

if (empty(trim($_POST["title"]))) {
    die("O título da tarefa é obrigatório.");
}

$tasks = [];
if (isset($_COOKIE["tasks"])) {
    $tasks = json_decode($_COOKIE["tasks"], true);
}

$tasks[] = [
    "title" => trim($_POST["title"]),
    "description" => $_POST["description"] ?? ''
];

setcookie("tasks", json_encode($tasks), time() + 86400 * 30, '/');

header("Location: index.php");
exit;