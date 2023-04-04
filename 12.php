<?php
   class User {
    public $name;
    public $lname;
   
  public function __construct($name, $lname) {
    $this ->name=$name;
    $this ->lname=$lname;
  }
   
   
   
   
    function set_name($name) {
    $this->name = $name;
   }
   function get_name() {
    return  $this->name;
   }
}

   $user1 = new User('Rokas', 'Aliulis');
   $user2 = new User('Lukas', 'Vaivada');



   echo "$user1->name $user1->lname <br>"; 
   echo "$user2->name $user2->lname";
?>