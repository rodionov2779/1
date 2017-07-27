<?php 
           /* class User 
      { 
      public $name; 
      public $password; 
      public $email; 
      public $city; 

      function __construct($name, $password , $email , $city) 
      { 
      $this -> name = $name; 
      $this -> password = $password; 
      $this -> email = $email ; 
      $this -> city = $city; 
      } 

      function getInfo() 
      { 
      $information = $this -> name . 
      $this -> password . 
      $this -> email . 
      $this -> Kiev ; 

      return $information; 
      } 
      } 

      //$user1 = new 


      class Moderator extends User 
      { 
      public $info; 
      public $rights; 

      function __construct($name,$password,$email,$city,$info,$rights) 
      { 
      parent:: __construct($name, $password , $email , $city); 
      $this -> info = $info; 
      $this -> rights = $rights; 
      } 

      function getInfo() 
      { 
      $information = parent::getInfo(); 
      $information .= ($this -> info) .($this -> rights); 
      return $information; 
      } 

      } 

      $moder = new Moderator("Alex" , "12121997ddd" , "vsher@gmail.com" , "Minsk" , "INFO" , "RIGHTS"); 
      echo $moder -> getInfo(); */
          class Vlad
          {
              public $name = "Vlad";
              public $password = "12121998d";
          }
         
          class LOL extends Vlad
          {
              
          }
         class POP extends Vlad
          {
              
          }
        
        

        $c = new LOL();
        echo $c -> name . "<br>";
        $c2 = new POP();
        echo $c2 -> name . "<br>";
   
 
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
           
           
        </form>
        

    </body>    
</html>
