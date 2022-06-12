<?php

require_once ROOTPATH."core/Database.php";

class Users
{
    private $db;

    public function __construct(){
        $this -> db = new Database;
    }

    //Find user by email or username
    public function findUserByUsername($username = ''){
        $this->db->query("SELECT * FROM client WHERE userName = ?");
        $row = $this->db->single([$username]);
        //Check user
        if($this->db->rowCount() > 0){
            return $row;
        } else {
            return false;
        }
    }

    public function addUser($data = []){
        
        $this->db->query("INSERT INTO client VALUES (null,?,?,?,?,?,?,?,?,?,?,'USER')");
        
        if ($this->db->execute($data)) {
            return true;
        } else {
            return false;
        }
    }
}