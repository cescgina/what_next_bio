<?php
class USER
{
    private $db;
 
    function __construct($dbc)
    {
      $this->db = $dbc;
    }
 
    public function register($first_name,$surname,$username,$email,$password)
    {
       try
       {
           $new_password = password_hash($password, PASSWORD_DEFAULT);
   
           $stmt = $this->db->prepare("INSERT INTO users(first_name,surname,username,email,password) 
                                                       VALUES(:first_name, :surname, :username, :email, :password)");
           $stmt->bindparam("first_name",$first_name);      
           $stmt->bindparam("surname",$surname);      
           $stmt->bindparam(":username", $username);
           $stmt->bindparam(":email", $email);
           $stmt->bindparam(":password", $new_password);            
           $stmt->execute(); 
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
    public function login($name_email,$password)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM users WHERE username=:name_email OR email=:name_email LIMIT 1");
          $stmt->execute(array(':username'=>$username, ':email'=>$email));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($password, $userRow['password']))
             {
                $_SESSION['user_session'] = $userRow['id'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }
}
?>
