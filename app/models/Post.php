<?php
class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPosts()
    {
        //query
        $this->db->query("  SELECT 
                                *,
                                Posts.id as postId,
                                Users.id as userId,
                                Posts.created_at as postCreated,
                                Users.created_at as userCreated
                            FROM 
                                Posts
                            INNER JOIN 
                                Users
                            ON
                                Posts.user_id = Users.id
                            ORDER BY
                                Posts.created_at
                            DESC");
        //Fetch all posts
        $results = $this->db->resultSet();
        return $results;
    }

    public function getUserPosts()
    {
        //query
        $this->db->query("  SELECT 
                                *,
                                Posts.id as postId,
                                Users.id as userId,
                                Posts.created_at as postCreated,
                                Users.created_at as userCreated
                            FROM 
                                Posts
                            INNER JOIN 
                                Users
                            ON
                                Posts.user_id = Users.id
                            WHERE 
                                user_id = :id
                            ORDER BY
                                Posts.created_at
                            DESC");
        //Bind values
        $this->db->bind(':id', $_SESSION['user_id']);
        //Fetch all posts
        $results = $this->db->resultSet();
        return $results;
    }

    public function addPost($data)
    {
    }
}
