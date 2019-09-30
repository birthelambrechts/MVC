<?php
class Projects extends DB {
  public function get(){
    $id= $_SESSION['id'];
    return $this->select("SELECT * FROM `mvc.local` WHERE id=$id");
  }
}






