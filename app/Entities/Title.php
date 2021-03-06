<?php

namespace App\Entities;

/**
 * @Entity
 * @Table(name="titles")
 */

class Title {

  /**
  * @id
  * @Column(type="integer")
  * @GeneratedValue
  */
  protected $id;

  /** 
  * @Column(type="string", nullable=false, ) 
  */
  protected $titleName;

  /**
  * @OneToMany(targetEntity="User", mappedBy="title")
  */
  protected $user;

  public function getId() {
    return $this->id;
  }
  
  public function getTitleName() {
    return $this->titleName;
  } 

  public function setTitleName($titleName) {
    $this->titleName = $titleName;
  }

  public function getUser() {
    return $this->user;
  }
  
}

?>