<?php
require_once('Models/Todo.php');

$task = $_POST['task'];

//todoクラスのインスタンスを作成し
//変数todoに入れる
$todo = new Todo();



//todoクラスのcreateメソッドを実行
$todo->create($_POST['task']);

header('Location: index.php');
  exit;

// echo '<br>';
// echo $todo->table;
// echo '<br>';

// var_dump($todo->db_manager);
