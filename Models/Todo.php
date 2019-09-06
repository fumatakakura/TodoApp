<?php

require_once('config/dbconnect.php');

// Todoを操作するクラス（もの）
//　追加する機能
//　検索する機能
//　編集する機能
//　削除する機能



class Todo
{
    // プロパティ
    
    
    //  テーブル名
    private $table = 'tasks';

    //  Dbmanagerインスタンスを持つ変数
    private $db_manager;

    

    public function __construct()
    {
        $this->db_manager = new DbManager();

        $this->db_manager->connect();
    }

    public function create($fuck)
    {
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . '(name) VALUES (?)');

        $stmt->execute([$fuck]);
    }
}