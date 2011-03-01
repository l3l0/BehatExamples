<?php
/*
 * (c) 2011 Leszek Prabucki
 *
 * @author      Leszek Prabucki <leszek.prabucki@gmail.com>
 */
 
 namespace Sensio\HelloBundle\Document;

/**
 * @mongodb:Document(collection="users")
 */
class User
{
   /**
    * @mongodb:Id
    * @var integer
    */
   protected $id;

   /**
    * @mongodb:String
    * @validation:MaxLength(100)
    * @validation:NotBlank
    * @var string
    */
   protected $login;

   /**
    * @mongodb:String
    * @var string
    */
   protected $slug;

   /**
    * @mongodb:String
    * @validation:MaxLength(100)
    * @validation:NotBlank
    * @var string
    */
   protected $firstname;
   
   /**
    * @mongodb:String
    * @validation:MaxLength(255)
    * @validation:NotBlank
    * @var string
    */
   protected $lastname;
   
   /**
    * @mongodb:String
    * @validation:Email
    * @var string
    */
   protected $email;
   
   /**
    * @mongodb:String
    * @var integer
    */
   protected $age;
   
   /**
    * @mongodb:String
    * @var string
    */
   protected $job;
   
   /**
    * @return integer 
    */
   public function getId()
   {
       return $this->id;
   }
   
   /**
    * @param integer
    */
   public function setId($id)
   {
       $this->id = $id;
   }
   
   /**
    * @return string
    */
   public function getLogin()
   {
       return $this->login;
   }

   /**
    * @param string
    */
   public function setLogin($login)
   {
       $this->login = $login;
       $this->slug  = strtolower(str_replace(array(' ', '_'), '-', \Doctrine\Common\Util\Inflector::tableize($login)));
   }
   
   /**
    * @return return
    */
   public function getSlug()
   {
       return $this->slug;   
   }
   
   /**
    * @return string
    */
   public function getFirstname()
   {
       return $this->firstname;
   }
   
   /**
    * @param string
    */
   public function setFirstname($firstname)
   {
       $this->firstname = $firstname;
   }
   
   /**
    * @return string
    */
   public function getEmail()
   {
       return $this->email;
   }
   
   /**
    * @param string
    */
   public function setEmail($email)
   {
       $this->email = $email;
   }
   
   /**
    * @return string
    */
   public function getLastname()
   {
       return $this->lastname;
   }
   
   /**
    * @param string
    */
   public function setLastname($lastname)
   {
       $this->lastname = $lastname;
   }
   
   /**
    * @return age
    */
   public function getAge()
   {
       return $this->age;
   }
   
   /**
    * @param string
    */
   public function setAge($age)
   {
       $this->age = $age;
   }
   
   /**
    * @return string
    */
   public function getJob()
   {
       return $this->job;
   }
   
   /**
    * @param string
    */
   public function setJob($job)
   {
       $this->job = $job;
   }
}
