<?php

namespace App\Entities;

/**
 * @Entity
 * @Table(name="learners")
 */

class Learner {

  /**
  * @id
  * @Column(type="integer")
  * @GeneratedValue
  */
  protected $id;

  /** 
  * @Column(type="string", nullable=true, ) 
  */
  protected $leaners_licence;

  /**
  * @ManyToOne(targetEntity="App\Entities\User", inversedBy="learner", cascade={"remove"})
  * @JoinColumn(name="user_id", referencedColumnName="id", onDelete="Cascade")
  */
  protected $user;

  function getId() {
    return $this->id;
  }

  function getLearnersLicence() {
    return $this->$leaners_licence;
  }

  function setLearnersLicence($leaners_licence) {
    $this->leaners_licence = $leaners_licence;
  }

  function getUser() {
    return $this->user;
  }

}

?>