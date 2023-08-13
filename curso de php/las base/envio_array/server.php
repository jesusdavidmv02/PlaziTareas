<?php 

   echo "<pre>";
     print_r( $_POST);
   echo "</pre>";


   if (isset($_POST['persona']['nombre']) && !empty($_POST['persona']['nombre'])) {
        echo "!hola mi nombre es : " . $_POST['persona']['nombre'];
   }else{
    echo "noo hay datos ";
   }


   $validado = htmlentities($_POST['persona']['nombre'])
    

//    echo "<pre>";
//      print_r( $_FILES);
//    echo "</pre>";




// $htmlentities = htmlentities($name);
// $addslashes = addslashes($username);
// $onlywords = preg_replace("/\d/", "", $username);
// $onlynumbers = preg_replace("/\D/", "", $username);
// $email = filter_var($email, FILTER_SANITIZE_EMAIL);
// $sanitize_int = filter_var($age, FILTER_SANITIZE_NUMBER_INT);

?>