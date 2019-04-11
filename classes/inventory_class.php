<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class inventory_class
{
  function __construct()
  {
    $connect = new connect();
    $this->inventory = $connect->connection();
    $this->date_added = strtotime(date('Y-m-d-H-i-s'));
  }
  public function ajax_login($data){
    if(isset($data) && !is_null($data)){
      $username = $data["username"];
      $password = $data["password"];
      $login_sql="SELECT id, type FROM user WHERE username= '".$username."' and password= '".md5($password)."' ";
      $login_result=mysqli_query($this->inventory,$login_sql);
      $login_count=mysqli_num_rows($login_result);
      if ($login_count == 1)
      {
        $login_fetch=mysqli_fetch_assoc($login_result);
        $id= $login_fetch['id'];
        $type = $login_fetch['type'];
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['usertype'] = $type;
        $_SESSION['loggedIN'] = true;
      }
      else
      {
        echo"Incorrect Credentials";
      }
      return 1;
    }
  }
}
?>
