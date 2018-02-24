<?php

namespace App\Entities;

/**
 * @Entity
 * @Table(name="cars")
 */

class Car {

  /**
  * @id
  * @Column(type="integer")
  * @GeneratedValue
  */
  protected $id;

  /** 
  * @Column(type="string", nullable=falsetrue) 
  */
  protected $car_name;

  /** 
  * @Column(type="string", nullable=falsetrue) 
  */
  protected $car_type;
  

  /** 
  * @Column(type="string", nullable=false) 
  */
  protected $reg_number;


  function getId() {
    return $this->id;
  }

  function getCarName() {
    return $this->car_name;
  }

  function setCarName($car_name) {
    $this->car_name = $car_name;
  }

  function getCarType() {
    return $this->car_type;
  }

  function setCarType($car_type) {
    $this->car_type = $car_name;
  }

  function getRegNumber() {
    return $this->reg_number;
  }

  function setRegNumber($reg_number) {
    $this->reg_number = $reg_number;
  }

}

?>