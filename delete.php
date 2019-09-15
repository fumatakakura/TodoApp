<?php
require_once('Models/Todo.php');
//編集するファイル
//delete.php
//Todo.php

//Todo.php
//deleteメソッドを作成
//渡されたidのタスクを削除する

//delete.php
//渡されたidのタスクを削除する
//一覧画面に戻る


$id = $_GET['id'];

$todo = new Todo();

$todo->delete($id);

echo json_encode($id);

// header("Location: index.php");

