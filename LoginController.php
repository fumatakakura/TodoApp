<?php
require_once('Models/User.php');

$username = $_POST['username'];
$password = $_POST['password'];


//ユーザー名を元に、データベースからユーザーを取得
$user = new User();
$loginUser = $user->findByUsername($username);



//１.入力されたユーザー名が存在しない
if (!$loginUser){
    //->ログイン画面に戻る
    header('Location: login.html');
}

//２.入力されたユーザーはいたけど、パスワードが違う
//->ログイン画面に戻る

//送信されたパスワードを暗号化する
$hashPass = password_hash($password, PASSWORD_BCRYPT);
if(password_verify($password, $loginUser['password'])){
    header('Location: login.html');
}


//３.入力されたユーザー名がいて、パスワードもあっている
//->タスク一覧に繊維

if(password_verify($password, $loginUser['password'])){
    session_start();
    $_SESSION['user'] = $loginUser;
    header('Location: index.php');
}
