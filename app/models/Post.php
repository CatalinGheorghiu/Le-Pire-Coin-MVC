<?php
class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPosts()
    {
        $this->db->query("SELECT * FROM Posts");
        $results = $this->db->resultSet();
        return $results;
    }
}
