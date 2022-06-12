<?php

require_once ROOTPATH."models/Product.php";

class Admin extends Controller
{
    public function __construct(){
        $this->adminModel = $this->model('AdminModel');
    }
    
    public function index(){
        session_start();
        if($_SESSION['type']== 'ADMIN' ){
            $orders = $this->adminModel->getPurchases();
            $active=['active',''];
            $this->view('admin/dashboard/index',['title'=>'Dashboard','active'=>$active,'orders'=>$orders]);
        } else {
            redirect('home');
        }
    }

    public function products(){
        session_start();
        if($_SESSION['type']== 'ADMIN' ){
        $active=['','active'];
        $products = $this->adminModel->getProducts();
        $categories = $this->adminModel->getCategories();
        $this->view('admin/products/index',['title'=>'Products', 'products'=>$products,'categories'=>$categories,'active'=>$active]);
        } else {
            redirect('home');
        }
    }

    public function addProduct(){
        session_start();
        if($_SESSION['type']== 'ADMIN' ){
        $categories = $this->adminModel->getCategories();
        $this->view('admin/products/add-product',['categories'=>$categories,'title'=>'Add Product']);
        } else {
            redirect('home');
        }
    }

    public function setProduct(){
        session_start();
        if($_SESSION['type']== 'ADMIN' ){
        $this->adminModel->setProduct($_POST);
        redirect('admin/products');
        } else {
            redirect('home');
        }
    }

    public function addCategory(){
        session_start();
        if($_SESSION['type']== 'ADMIN' ){
        $this->adminModel->addCategory($_GET['category']);
        redirect('admin/products');
        } else {
            redirect('home');
        }
    }

    public function removeCategory($category){
        session_start();
        if($_SESSION['type']== 'ADMIN' ){
        $this->adminModel->removeCategory($category);
        redirect('admin/products');
        } else {
            redirect('home');
        }
    }

    public function removeProduct($product){
        session_start();
        if($_SESSION['type']== 'ADMIN' ){
        $this->adminModel->removeProduct($product);
        redirect('admin/products');
        } else {
            redirect('home');
        }
    }
}