<?php  

class Login{
  private $con;
  public $email;
  public $password;

public function __construct(Conexion $con){
    $this->con = $con;
  }

public function setEmail(string $email){
  $this->email = $email;
}

public function setPassword(string $password){
  $this->password = $password;
}

public function signIn(){
  $query = "SELECT * FROM `administradores` WHERE email_admin = '$this->email' AND password_admin = '$this->password' ";

  // $query = "SELECT * FROM `negocios` WHERE email_negocio = '$this->email' AND password_negocio = '$this->password' ";

  $this->con->query($query);

  if ($this->con->affected_rows > 0)
    return true;
  return false;
  
}

}


?>