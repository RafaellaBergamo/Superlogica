<?php

namespace App;

class User
{
  public function __construct($user)
  {
    $this->name = $user['name'];
    $this->userName = $user['userName'];
    $this->zipCode = $user['zipCode'];
    $this->email = $user['email'];
    $this->password = bcrypt($user['password']);
  }
  
  public function getName()
  {
    return $this->name;
  }

  public function getUserName()
  {
    return $this->userName;
  }

  public function getZipCode()
  {
    return $this->zipCode;
  }
  
  public function getEmail()
  {
    return $this->email;
  }
  
  public function getPassword()
  {
    return $this->password;
  }
}