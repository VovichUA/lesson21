<?php

class Post extends Model
{

    public function findAll()
    {
        $sql = 'SELECT * FROM posts';
        $query = $this->connection->prepare($sql);
        $posts = $query->fetchAll();
        return $posts;
    }

    public function findOne($id)
    {
        $sql = 'SELECT * FROM posts WHERE id = :id';
        $query = $this->connection->prepare($sql);
        $posts = $query->fetchAll();
        return $posts;
    }

}


