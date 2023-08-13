<?php 

abstract class Base {

    protected $name;

    private function getClassName(){
        return get_called_class();
    }

    public function login(){
        return "Mi nombre es $this->name 
        desde la clase {$this->getClassName() }";
    }

}

class Admin extends Base {
    
    public function __construct($name){
        $this->name =$name;
    }
}

class User extends Base {
    
    public function __construct($name){
        $this->name = $name;
    } 
}


class  Guest extends Base {
    
        protected $name ='Invitado';
    
}


$gues = new Guest();
echo  $gues->login();

echo  "<br>";

$user = new User('Jesus');
echo  $user->login();

echo  "<br>";

$admin = new Admin('Mendoza');
echo  $admin->login();

// echo phpinfo();