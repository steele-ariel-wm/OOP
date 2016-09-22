<?php
abstract class Effect{
  public $name;
  public $color;
  public function describe(){
      return $this->name. ' is ' .$this->color;
  }
  abstract public function takePicture();
}
class Panning extends Effect{
  public function describe(){
      return parent::describe();
  }
  public function takePicture(){
      return 'In Motion';
  }
}
?>
