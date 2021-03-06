<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    //Register user
    public function register($data)
    {
        //Query
        $this->db->query('INSERT INTO Users (name, email, password) VALUES (:name, :email, :password)');

        //Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //Login 
    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM Users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();
        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    //Find user by email
    public function findUserByEmail($email)
    {
        //Query
        $this->db->query('SELECT COUNT(*) > 0 FROM Users WHERE email = :email');

        //Bind values
        $this->db->bind(':email', $email);

        $countEmail = $this->db->getColumn();

        //Check row
        if ($countEmail > 0) {
            //if there is an email in DB
            return true;
        } else {
            return false;
        }
    }
}
