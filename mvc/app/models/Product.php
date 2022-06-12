<?php

require_once ROOTPATH."core/Database.php";

class Product
{
    private $db;
    
    public function __construct(){
        $this -> db = new Database;
    }

    public function allProducts () {
        $sql = "SELECT * FROM product ORDER BY timeStamp desc";
        $this->db->query($sql);
        $products = $this->db->resultSet();
        if ($this->db->rowCount() > 0){
            return $products;
        } else {
            return false;
        }
    }

    public function latestProducts(){
        $sql = "SELECT * FROM product ORDER BY timeStamp desc";
        $this->db->query($sql);
        $products = array_slice($this->db->resultSet(), 0,6);
        if ($this->db->rowCount() > 0){
            return $products;
        } else {
            return false;
        }
    }

    public function oneProduct($id){
        $sql = "SELECT * FROM product WHERE productId = ?";
        $this->db->query($sql);
        $row = $this->db->single([$id]);
        //Check user
        if($this->db->rowCount() > 0){
            return $row;
        } else {
            return false;
        }
    }

    public function search($keywords){
        $sql = "SELECT *,MATCH(description) AGAINST(?) AS score FROM `product` WHERE  MATCH (description) AGAINST (?) ORDER BY score DESC;";
        $this->db->query($sql);
        $products = $this->db->resultSet([$keywords,$keywords]);
        //Check user
        if($this->db->rowCount() > 0){
            return $products;
        } else {
            return false;
        }
    }

    public function getCart($user){
        $sql = "SELECT c.id as cart_id, p.* FROM cart c join product p ON c.product_id = p.productId WHERE c.user = ?";
        $this->db->query($sql);
        $products = $this->db->resultSet([$user]);
        //Check Cart
        if($this->db->rowCount() > 0){
            return $products;
        } else {
            return false;
        }
    }

    public function addToCart($product){
        $sql = "INSERT INTO cart VALUES(null,?,?)";
        $this->db->query($sql);
        session_start();
        $this->db->execute([$_SESSION['user'],$product]);
    }

    public function removeFromCart($cart_id){
        $sql = "DELETE FROM cart WHERE id = ?";
        $this->db->query($sql);
        $this->db->execute([$cart_id]);
    }

    public function checkPayement($product){
        session_start();
        $sql = "INSERT INTO purchases VALUES(null,null,?,?)";
        $this->db->query($sql);
        $this->db->execute([$_SESSION['user'],$product]);
    }
}