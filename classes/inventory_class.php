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
        // echo
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
  public function list_inventory()
  {
    $list_fetch = array();
    $list_sql = "SELECT product_name, vendor, mrp, quantity, status FROM inventory";
    $list_result = mysqli_query($this->inventory,$list_sql);
    $list_count = mysqli_num_rows($list_result);
    if($list_count > 0){
      while($row = mysqli_fetch_assoc($list_result))
      {
        array_push($list_fetch, $row);
      }
    }
    else {
      echo"Nothing in Inventory";
    }
    return $list_fetch;
  }

  public function add_inventory($data)
  {
    if(isset($data) && !is_null($data)){
      $status = ($data['user_type'] == 1) ? "Approved" : "Pending";
      $add_sql = "INSERT INTO inventory (product_id, product_name, quantity, vendor, mrp, status, batch_number, batch_date) VALUES ('".$data['product_id']."','".$data['product_name']."', '".$data['quantity']."', '".$data['vendor']."', '".$data['mrp']."', '".$status."', '".$data['batch_number']."', '".$data['batch_date']."')";
      $add_result=mysqli_query($this->inventory,$add_sql);
      $add_query = ($add_result) ? "success" : "failure";
      return $add_query;
    }

  }
}
?>
