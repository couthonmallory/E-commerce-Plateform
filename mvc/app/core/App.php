<?php
class App
{
    protected $controller = 'home';
    protected $method = 'index';
	protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        if ($url){
            if (file_exists(ROOTPATH.'controllers/'. $url[0].'.php'))
            {
                $this -> controller = $url[0];
                unset($url[0]);
            } else {
                $this -> controller = 'errorpage';
            }
        }
        
        require_once ROOTPATH.'controllers/'.$this->controller.'.php';
        try{
            $this->controller = new $this->controller;
        }catch(Exception  $e ){
            redirect('home');
        }

        if(isset($url[1]))
        {
            if(method_exists($this->controller,$url[1]))
            {
                $this->method= $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];
        try{
            call_user_func_array([$this->controller,$this->method],$this->params);
        }catch(Exception  $e ){
            redirect('home');
        }
    }

    public function parseUrl()
    {
        if(isset($_GET['url'])) {
            return explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
        }
    }
}