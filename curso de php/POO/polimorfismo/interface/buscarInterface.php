<?php 

interface Search {

    public function all();

}

class  User implements Search{

    public  function all(){
        return "Obteneido  a los Users XML";
    }
}

class  Post implements Search{

    public  function all(){
        return "Obteniendo a los Users , JSON";
    }
}

$user = new user();
echo $user->all();


$post = new user();
echo $post->all();
