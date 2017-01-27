<?php
class Conexion extends mysqli {
    private $datos = array(
        'database_host'=>'',
        'database_user'=>'',
        'database_passwd'=>'',
        'database_name'=>'',
        'database_port'=>''
        );

        public function __construct()
        {
            $this->datos= array(
        'database_host'=>'localhost',
        'database_user'=>'root',
        'database_passwd'=>'',
        'database_name'=>'udo',
        'database_port'=>'3306'
            );
            // $this->conectar();
            parent::__construct($this->database_host, $this->database_user, $this->database_passwd, $this->database_name, $this->database_port);
        }

        public function __construct1($host, $user, $name, $passwd, $port)
        {
            $this->datos= array(
        'database_host'=>$host,
        'database_name'=>$name,
        'database_user'=>$user,
        'database_passwd'=>$passwd,
        'database_port'=>$port
            );
            // $this->conectar();
            parent::__construct($host, $user, $name, $passwd, $port);
        }
        

        public function conectar()
        {
             $this->connect(
                $this->database_host,
                $this->database_user,
                $this->database_passwd,
                $this->database_name,
                $this->database_port
             );
        }

    public function __get($keyname)
    {
        if(array_key_exists($keyname, $this->datos))
        return $this->datos[$keyname];        
    }

    public function __set($keyname, $value)
    {
        if(array_key_exists($keyname, $this->datos))
        $this->datos[$keyname] = $value;
    }
}
// $objeto = new Conexion();
// $a = mysqli_connect('localhost','root','root','udo','3306');
// $b = mysqli_query($a, 'select * from usuarios');
// $c = mysqli_fetch_assoc($b);

// $rst = $objeto->query('select * from usuarios');
// $r = $rst->fetch_assoc();
// var_dump($r);-->