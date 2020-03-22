<?php

class QueryBuilder
{
  // 属性
  protected $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table)
  {
    $statement = $this->pdo->prepare("select * from {$table}"); //クエリの組み立て
    $statement->execute(); //クエリの実行
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table, $parameters)
  {
    $sql = sprintf(
      'insert into %s (%s) values (%s)', // テーブル名、カラム名、値
      $table, //テーブル名
      implode(', ', array_keys($parameters)), // カラム名。array_keysでキーだけ取り出せる
      ':' . implode(', :' , array_keys($parameters)) //値
    );

    try {
      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);  
    } catch (Exception $e) {
      die('Whoops, something went wrong.');
    }
  }
}