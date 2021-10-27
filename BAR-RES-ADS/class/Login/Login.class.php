<?php  

class Login{
  private $con;
  public $email;
  public $password;

  public function __construct(Conexion $con){
      $this->con = $con;
    }

  public function setEmail(string $email){
    $this->email = $this->con->real_escape_string($email);
  }

  public function setPassword(string $password){
    $this->password = password_hash($password, PASSWORD_BCRYPT);
  }

  public function signIn(){
    $query = "SELECT * FROM `usuarios` WHERE email = '$this->email' AND passwoord = '$this->password' ";

    $res = $this->con->query($query);

    if ($this->con->affected_rows > 0)
      return $res->fetch_array(MYSQLI_ASSOC);
    return false;
    
  }

}


?>