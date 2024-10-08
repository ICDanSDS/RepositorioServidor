<?php
class AppNumerica
{

    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'login';
        }
        $this->$method();
    }
    public function home()
    {
      
      include('views/home.php');
    }
    public function login()
    {
      echo "Estamos en login <br>";
      include('views/login.php');
    }
    public function auth()
    {
        if(isset($_POST["NAME"])&& isset($_POST["PASSWORD"])){
            $name = $_POST["NAME"];
            $password = $_POST["PASSWORD"];
            setcookie("name",$name,time()+3600*24);
            setcookie("password",$password,time()+3600*24);

            header('Location: method=home');
            
        }
     
    }
    public function logauth(){
        setcookie("name","",time()-1);
        setcookie("password","",time()-1);

        header('Location: method=login');
    }
}
