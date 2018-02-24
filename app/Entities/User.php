<?php 

namespace App\Entities;

/**
 * @Entity
 * @Table(name="users")
 */
class User {

  /** 
    * @Id
    * @Column(type="integer") 
    * @GeneratedValue()
    */
    protected $id;

    /**
    * @ManyToOne(targetEntity="App\Entities\Role", inversedBy="user", cascade={"remove"})
    * @JoinColumn(name="role_id", referencedColumnName="id", onDelete="Cascade")
    */
    protected $role;

    /**
    * @ManyToOne(targetEntity="App\Entities\Title", inversedBy="user", cascade={"remove"})
    * @JoinColumn(name="title_id", referencedColumnName="id", onDelete="Cascade")
    */
    protected $title;

    /**
    * @OneToOne(targetEntity="App\Entities\Driver", mappedBy="user")
    */
    protected $driver;

    /**
    * @OneToOne(targetEntity="App\Entities\Learner", mappedBy="user")
    */
    protected $learner;

    /** 
    * @Column(type="string", nullable=true) 
    */
    protected $name;

    /** 
    * @Column(type="string", nullable=true) 
    */
    protected $email;

     /** 
    * @Column(type="string", nullable=false) 
    */
    protected $password;

    /** 
    * @Column(type="datetime", nullable=false) 
    */
    protected $created_at;

    /** 
    * @Column(type="datetime", nullable=false) 
    */
    protected $updated_at;
  
    function getId() {
      return $this->id;
    }

    function getName() {
      return $this->name;
    }

    function setName($name) {
      $this->name = $name;
    }
    
    function getRole() {
      return $this->role;
    }

    function setRole(Role $role){
      $this->role = $role;
    }

    function getTitleName(){
      return $this->title;
    }

    function setTitleName(Title $title) {
      $this->title = $title;
    }

    function getDriver() {
      return $this->driver;
    }

    function setDriver() {
      $this->driver = $driver;
    }

    function getEmail() {
      return $this->email;
    }

    function setEmail($email) {
      $this->email = $email;
    }

    function getPassword() {
      return $this->password;
    }

    function setPassword($password) {
      $this->password = $password;
    }

    function getCreatedAt() {
      return $this->created_at;
    }

    function setCreatedAt($created_at) {
      $this->created_at = $created_at;
    }

    function getUpdatedAt() {
      return $this->updated_at;
    }

    function setUpdatedAt($updated_at) {
      $this->updated_at = $updated_at;
    }

 }