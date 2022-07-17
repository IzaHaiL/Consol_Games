<?php

class App{
    // parameter untuk tampilan ketika pertama kali web di panggil
    protected $controller ='Home';
    protected $method ='index';
    Protected $params =[];

    
    public function __construct()
    {
        //controller
        $url = $this->parseURL();
        if($url == NULL)
        {
			$url = [$this->controller];
		}
        if(file_exists('../app/controllers/'. $url[0] . '.php'))
		{
			$this->controller = $url[0];
			unset($url[0]);
            
		}

    require_once '../app/controllers/'.$this->controller. '.php';
    $this->controller = new $this->controller;


    // ini untuk method
    if(isset($url[1])){
        if(method_exists($this->controller, $url[1])){
            $this->method = $url[1];
            unset($url[1]);
        }
    }

    
    // ini untuk params
    if(!empty(!empty($url))){
        $this->params = array_values($url);
    }
        //  ini untuk menjalakan fungsi controll

        call_user_func_array([$this->controller, $this->method],$this->params);

    }
    
    //  function untuk membersihkan url agar rapi
    public function parseURL()
    {
        if (isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);   
            return $url;
        }
    }
}