<?php
header("Content-type: application/json; charset=utf-8");
require_once('Models/Todo.php');


//ajaxからtaskが送信されてくる
$task = $_POST['task'];

//todoクラスのインスタンスを作成し
//変数todoに入れる
$todo = new Todo();



//todoクラスのcreateメソッドを実行
$lastId = $todo->create($task);

$newtask = $todo->get($lastId);

echo json_encode($newtask);

// header('Location: index.php');
//   exit;

// echo '<br>';
// echo $todo->table;
// echo '<br>';

// var_dump($todo->db_manager);
