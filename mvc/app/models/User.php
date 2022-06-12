<?php

require_once ROOTPATH."core/Database.php";

class User
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
        
        $this->db->query("INSERT INTO client VALUES (?,?,?,?,?,?,?,?,?,?,?)");

        if ($this->db->execute($data)) {
            return true;
        } else {
            return false;
        }

            ////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////
            //(`userName`,`Password`,`Nom`,`Prenom`,`Genre`,`Email`,`Adresse`)

            //$this->db->query("INSERT INTO `test` (`a`, `b`) VALUES ('4', '3')");

            /*$this->db->bind(':userName',$data['username']);
            $this->db->bind(':Password',$data['password']);
            $this->db->bind(':Nom',$data['firstName']);
            $this->db->bind(':Prenom',$data['lastName']);
            $this->db->bind(':Genre',$data['sexe']);
            $this->db->bind(':Email',$data['email']);
            $this->db->bind(':Profil', "test");
            $this->db->bind(':adresse',$data['address']);
            $this->db->bind(':DateNaissance',$data['birthday']); 

            (ID,userName,Password,Nom,Prenom,Genre,Email,Profil,Adresse,DateNaissance,DateInscrip)*/
            ////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////


            
            /*  $this->db->query("INSERT INTO client VALUES (:ID, :userName,:Password,:Nom,:Prenom,:Genre,:Email,:Profile,:Adresse,:DateNaissance,:DateInscrip)"); */

            /* $this->db->bind(':ID', $data['ID']);
            $this->db->bind(':userName',$data['username']);
            $this->db->bind(':Password',$data['password']);
            $this->db->bind(':Nom',$data['firstName']);
            $this->db->bind(':Prenom',$data['lastName']);
            $this->db->bind(':Genre',$data['sexe']);
            $this->db->bind(':Email',$data['email']);
            $this->db->bind(':Email',$data['Profile']);
            $this->db->bind(':Email',$data['email']);
            $this->db->bind(':Email',$data['email']);
            $this->db->bind(':Email',$data['email']); */

            /* print_r($data);

            $this->db->bind(':ID', $data[0]);
            $this->db->bind(':userName',$data[1]);
            $this->db->bind(':Password',$data[2]);
            $this->db->bind(':Nom',$data[3]);
            $this->db->bind(':Prenom',$data[4]);
            $this->db->bind(':Genre',$data[5]);
            $this->db->bind(':Email',$data[6]);
            $this->db->bind(':Profile',$data[7]);
            $this->db->bind(':Adresse',$data[8]);
            $this->db->bind(':DateNaissance',$data[9]);
            $this->db->bind(':DateInscrip',$data[10]); */
            /* $this->db->query("INSERT INTO test VALUES (?,?)");


            if ($this->db->execute([1,66])) {
                return true;
            } else {
                return false;
            } */

    }
}