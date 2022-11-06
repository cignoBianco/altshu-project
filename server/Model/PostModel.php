<?php

require_once ROOT_PATH . "/Model/Database.php";
 
class PostModel extends Database
{
    public function getPosts($limit)
    {
        return ["post1"];
        // return $this->select("SELECT * FROM posts ORDER BY post_id ASC LIMIT ?", ["i", $limit]);
    }
}