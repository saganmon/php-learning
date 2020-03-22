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
}