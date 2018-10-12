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

}

