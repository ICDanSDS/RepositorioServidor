<?php
class AppNumerica
{

    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'index';
        }
        $this->$method();
    }
    public function factoriales()
    {
        //Factorial (factoriales). Debe mostar los factoriales desde 1 hasta n de tal manera 
        //que el último término sea el más próximo cercano al millón.
        $lista = [];
        $n = 1;
        $factorial = 1;
        while ($factorial < 1000000) {
            $lista[] =  $factorial;
            //echo "$n! = $factorial\n";
            $n++;
            $factorial *= $n;
        }
        require('view/factoriales.php');
    }
    public function fibonacci()
    {
        //Muestra la serie de Fibonacci. 
        //Debe mostrar todos los términos menores a un millón.
        
        $lista=[];
        $a = 0;
        $b = 1;

        for ($i = 0; $i < 10; $i++) {
            $resultado = $a + $b;
            $lista[]= $resultado;
            $a =  $b;
            $b = $resultado;
        }
        require('view/fibonacci.php');
    }
    public function potencias()
    {
        
        // Debe mostrar los valores 
        //de las potencias de 2 hasta 2 elevado a 24 (nº de colores True Color, por ejemplo).
        $lista=[];
        $resultado = 1;
        for ($i = 0; $i <= 24; $i++) {
           echo $resultado;
            $lista[]=$resultado;
            $resultado *= 2;
        }
        require('view/potencias.php');
    }
    public function index()
    {
      
      include('view/index.php');
    }
    public function login()
    {
      echo "Estamos en login <br>";
      include('view/form.php');
    }
}
