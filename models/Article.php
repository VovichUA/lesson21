<?php
/**
 * Created by PhpStorm.
 * User: vovichua
 * Date: 12.10.18
 * Time: 10:24
 */

class Article extends Model
{
    public function findAll()
    {
        $sql = 'SELECT * FROM article';
        $query = $this->connection->prepare($sql);
        $article = $query->fetchAll();
        return $article;
    }

    public function findOne($id)
    {
        $sql = 'SELECT * FROM article WHERE id = :id';
        $query = $this->connection->prepare($sql);
        $article = $query->fetchAll();
        return $article;
    }
}