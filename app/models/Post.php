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
        // $rowCounted = count($results);
        // var_dump($results);
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
        //Query
        $this->db->query('INSERT INTO Posts (title, price, mileage, registration_date, cubic_capacity, power, fuel, location, phone_number, full_description, user_id) VALUES (:title, :price, :mileage, :registration_date, :cubic_capacity, :power, :fuel, :location, :phone_number, :full_description, :user_id)');

        //Bind values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':mileage', $data['mileage']);
        $this->db->bind(':registration_date', $data['registration_date']);
        $this->db->bind(':cubic_capacity', $data['cubic_capacity']);
        $this->db->bind(':power', $data['power']);
        $this->db->bind(':fuel', $data['fuel']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':phone_number', $data['phone_number']);
        $this->db->bind(':full_description', $data['full_description']);
        $this->db->bind(':user_id', $data['user_id']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function showDetails($id)
    {
        //Query
        $this->db->query('  SELECT 
                                Posts.*,
                                Users.name,
                                Users.email
                            From 
                                Posts
                            INNER JOIN 
                                Users
                            ON
                                Posts.user_id = Users.id
                            WHERE 
                                Posts.id = :id');

        //Bind value
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        // var_dump($row);
        return $row;
    }

    public function updatePost($data)
    {
        //Query
        $this->db->query('  UPDATE 
                                Posts 
                            SET
                                title = :title, 
                                price = :price, 
                                mileage = :mileage, 
                                registration_date = :registration_date, 
                                cubic_capacity = :cubic_capacity, 
                                power = :power, 
                                fuel = :fuel, 
                                location = :location, 
                                phone_number = :phone_number, 
                                full_description = :full_description 
                            WHERE 
                                id = :id');

        //Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':mileage', $data['mileage']);
        $this->db->bind(':registration_date', $data['registration_date']);
        $this->db->bind(':cubic_capacity', $data['cubic_capacity']);
        $this->db->bind(':power', $data['power']);
        $this->db->bind(':fuel', $data['fuel']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':phone_number', $data['phone_number']);
        $this->db->bind(':full_description', $data['full_description']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePost($id)
    {
        //Query
        $this->db->query('  DELETE FROM 
                                Posts 
                            WHERE 
                                id = :id');

        //Bind values
        $this->db->bind(':id', $id);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getPostById($id)
    {
        $this->db->query('SELECT * FROM Posts WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();

        return $row;
    }
}
