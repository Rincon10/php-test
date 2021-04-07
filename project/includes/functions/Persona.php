
<?php 

/**
 * Clase que modela a una persona en la base de datos Mysql
 */

 class Persona {
    private $cc;
    private $nombres;
    private $apellidos;

    /**
     * constructor de la clase persona
     * @param int cc, identificador de la persona
     * @param string, nombres de la persona
     * @param string, apellidos de la persona
     */
    public function __construct( int $cc,  string $nombres, string $apellidos)
    {
        $this->cc = $cc;
        $this->nombres =$nombres;
        $this->apellidos =$apellidos;
    } 

    /**
     * metodo que retorna una sintaxis para insertar en una base de datos
     * @return array, donde en las posiciones tiene sintaxis de DB
     */
    public function toStringDB() {
        return ["(cc, nombres, apellidos)","(".$this->cc.", '".$this->nombres."', '".$this->apellidos."');"];
    } 

    /**
     * metodo que retorna el atributo CC
     * @return int, que representa la cc de la persona 
     */
    public function getCC() {
        return $this->cc;
    }
    
    /**
     * metodo que retorna los nombres de la persona
     * @return string, que representa el nombre de la persona 
     */
    public function getNombres () {
        return $this->nombres;
    }

    /**
     * metodo que retorna los apellidos de la persona
     * @return string, que representa los apellidos
     */
    public function getApellidos () {
        return $this->apellidos;
    }
 }