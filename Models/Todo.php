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
        //INSERT文の準備
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . '(name) VALUES (?)');
        //準備したものを実行
        $stmt->execute([$fuck]);

        //今作成したタスクのidを返す
        return $this->db_manager->dbh->lastInsertId();
    }

    public function getAll()
  {
    // SELECT文の準備
    $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table);

    // 準備したSQLを実行
    $stmt->execute();

    // 実行した結果を取得
    $tasks = $stmt->fetchAll();

    // 取得した結果を返す
    return $tasks;
  }

  public function delete($id)
  {
      // DELETE文の準備
    $stmt = $this->db_manager->dbh->prepare('DELETE FROM ' . $this->table. ' WHERE id = ?');

    // 準備したSQLを実行
    $stmt->execute([$id]);
  }

 // IDをもとにタスクを1件だけ取得するメソッド
  public function get($id)
  {
    // SQL準備
    $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE id = ?');
    // 実行
    $stmt->execute([$id]);
    $task = $stmt->fetch();

    // 取得したタスクを返す
    return $task;
  }

 // idを元に池袋デートメソッド
  public function sunshine($penguin, $farlion)
  {
    // SQL準備
    $stmt = $this->db_manager->dbh->prepare('UPDATE ' . $this->table . ' SET name = ? ' . ' WHERE id = ?');
    // 実行
    $stmt->execute([$penguin, $farlion]);
  }
}