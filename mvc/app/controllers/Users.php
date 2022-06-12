<?php

require_once ROOTPATH."models/User.php";

class Users extends Controller {

    public function __construct () {
        $this->userModel = $this->model('User');
    }

    public function index(){
        $this->view('user/login/index',['title' => 'Login']);
    }

    public function login (){
        $this->view('user/login/index',['title' => 'Login']);
    }

    public function init_session (){
        //Snitize post data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data = [
            'username' => trim($_POST['username']),
            'password' => trim($_POST['password'])
        ];

        //Validate Input
        if (empty($data['username']) || empty($data['password'])){
            echo "please enter your email or password";
        }
        //Search for the user
        $user = $this->userModel->findUserByUsername($data['username']);
        if ($user){
            if (password_verify($data['password'],$user['Password'])){
                
                session_start();
                $_SESSION['user'] = $user["userName"];
                $_SESSION['type'] = $user['type'];
                //$this->view('main/home/index',['title' => 'home']);
                redirect('home');
            }
        }
        
        //$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    }

    public function register (){
        $this->view('user/register/index',['title' => 'Register']);
    }

    public function addUser () {

        $user = $this->userModel->findUserByUsername(trim($_POST['username']));

        if (!$user){
            $data = array(
                trim($_POST['username']),
                password_hash(trim($_POST['password']), PASSWORD_DEFAULT),
                trim($_POST['fName']),
                trim($_POST['lName']),
                trim($_POST['sexe']),
                trim($_POST['email']),
                NULL,
                trim($_POST['address']),
                trim($_POST['bDay']),
                date('Y-m-d H:i:s')
            );
            
            $this->userModel->addUser($data);
            redirect('Users/login');
        } else {
            echo "User already exist";
        }
    }

    public function logout (){
        session_start();
        session_unset();
        session_destroy();
        $this->view('user/login/index',['title' =>'Login']);
    }
}