<?php

class App{
  public $name;
  public $module;
  public $teacher;
  public $student;

  public function __construct($name = "Aplicación PHP")
  {
    echo "Consturyendo la app <hr>";
    $this->name = $name;
    $this->module = "Desarrollo Web en Entorno Servidor";
    $this->teacher = "Rafael Cabeza";
    $this->student = "Fulano De Tal";
  }

  public function run() {
    //EL run nos redirige a la otras paginas
    echo "Moneda al aire... <hr>";
    $moneda = rand(0,1);
    // if ($moneda == 1) {
    if ($moneda) {
      echo "<h3>Ha salido cara:  </h3> <br>";
      $this->index();
    } else {
      echo "<h3> Ha salido cruz: </h3> <br>";
      $this->login();
    }
  }
  public function run2()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'index';
    }
    $this->$method();
  }
  
  public function index()
  {
    echo "Estamos en el index<br>";
    include('views/index.php');
  }

  public function login()
  {
    echo "Estamos en login <br>";
    include('views/form.php');
  }
  
}