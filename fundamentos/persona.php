<?php
class Persona {
    public $nombre;
    public $apellido;
    public $edad;
    public $email;

    public function toString() {
        return "Persona: $this->apellido, $this->nombre, edad $this->edad años, $this->email";
    }
}
?>