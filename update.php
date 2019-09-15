<?php
require_once('Models/Todo.php');
// require_once('edit.php');


$id = $_POST['id'];
$task = $_POST['task'];
$ikebukuro = new Todo();

$ikebukuro-> sunshine($task, $id);

header('Location: index.php');
  exit;


