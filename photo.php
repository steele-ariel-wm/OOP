<?php

class photo  {
  var $photo_name;
  public $film_name;
  private static $film_name_minLength = 5;

function __construct($photo_name){
  $this->photo_name = $photo_name;
}

  function set_name($new_photo){
    $this->photo_name = $new_photo;
  }
  function get_name(){
    return $this->photo_name;

  }
}




class photography extends photo{
  public function set_name ($new_name){
    if ($new_name == "Landscape"){
      $this->name = $new_name;
    }
    else if($new_name == "Portrait"){
      photo::set_name($new_name);
    }
  }
  function __construct($photo_name){
    $this->set_name($photo_name);

  }
}

?>
