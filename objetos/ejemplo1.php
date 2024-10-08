<?php
class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';

    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;
    }
    //NOTA: $this hace referenca a este objeto
    //"->" se usa para acceder a métodos y atributos
}
?>