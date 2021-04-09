<?php

class Lugar{
    private $ciudad;
    private $pais;
    
    /**
     * Constructor de la clase lugar
     * @param int idLugar, entero consecutivo identificador de la clase
     * @param string ciudad, Nombre de la ciudad en que se encuentra el lugar
     * @param string pais, Nombre del pais al que pertenece el lugar
     */
    public function __construct($ciudad,$pais)
    {
        $this->ciudad = $ciudad;
        $this->pais = $pais;
    }

    /**
     * Método que realiza la sintaxis necesaria para poder insertar un registro
     * @return String, sintaxis que usará para insertar nuevos registros
     */
    public function toStringDB() {
        return ["(ciudad, pais)","(".$this->ciudad."', '".$this->pais."');"];
    } 
    
    /**
     * metodo que retorna los ciudad de la persona
     * @return string, que representa el nombre de la persona 
     */
    public function getCiudad () {
        return $this->ciudad;
    }

    /**
     * metodo que retorna los pais de la persona
     * @return string, que representa los pais
     */
    public function getPais () {
        return $this->pais;
    }
}