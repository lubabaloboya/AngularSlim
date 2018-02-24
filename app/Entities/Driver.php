<?php

namespace App\Entities;

/**
 * @Entity
 * @Table(name="drivers")
 */

class Driver {

  /**
  * @id
  * @Column(type="integer")
  * @GeneratedValue
  */
  protected $id;

  /** 
  * @Column(type="string", nullable=true, ) 
  */
  protected $drivers_licence;

  /**
  * @ManyToOne(targetEntity="App\Entities\User", inversedBy="driver", cascade={"remove"})
  * @JoinColumn(name="user_id", referencedColumnName="id", onDelete="Cascade")
  */
  protected $user;

  function getId() {
    return $this->id;
  }

  function getDriversLicence() {
    return $this->$drivers_licence;
  }

  function setDriversLicence($drivers_licence) {
    $this->drivers_licence = $drivers_licence;
  }

  function getUser() {
    return $this->user;
  }

}

?>