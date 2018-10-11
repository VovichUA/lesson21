<?php
/**
 * Created by PhpStorm.
 * User: vovichua
 * Date: 10.10.18
 * Time: 11:35
 */

class Model
{
    protected $connection;

    public function __construct(PDO $pdo)
    {
        $this->connection = $pdo;
    }

    public function getConnection()
    {
        return $connection;
    }

    public function fetchAll($query)
    {
        $sql = 'SELECT * FROM posts';
        $query = $this->connection->prepare($sql);
        $result = $query->fetchAll();
        return $result;
    }

}

