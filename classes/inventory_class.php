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

  public function list_inventory()
  {
    $list_fetch = array();
    $list_sql = "SELECT id, product_name, vendor, mrp, quantity, status FROM inventory";
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
      //print_r($data); die;
      $status = ($data['user_type'] == 1) ? "Approved" : "Pending";
      $inventory = "SELECT id from inventory where id ='".$data['id']."' ";
      $inventory_result=mysqli_query($this->inventory,$inventory);
      $inventory_count=mysqli_num_rows($inventory_result);
      if ($inventory_count == 1){
        $add_sql = "UPDATE inventory SET product_id = '".$data['product_id']."', product_name = '".$data['product_name']."', quantity = '".$data['quantity']."', vendor = '".$data['vendor']."', mrp = '".$data['mrp']."', batch_number = '".$data['batch_number']."', batch_date = '".$data['batch_date']."' WHERE id = '".$data['id']."'";
        $add_result=mysqli_query($this->inventory,$add_sql);
      }
      else{
        $add_sql = "INSERT INTO inventory (product_id, product_name, quantity, vendor, mrp, status, batch_number, batch_date) VALUES ('".$data['product_id']."','".$data['product_name']."', '".$data['quantity']."', '".$data['vendor']."', '".$data['mrp']."', '".$status."', '".$data['batch_number']."', '".$data['batch_date']."')";
        $add_result=mysqli_query($this->inventory,$add_sql);
      }
      $add_query = ($add_result) ? "success" : "failure, can't add/update to inventory, need Store Admin Permission";
      return $add_query;
    }
  }

  public function update_inventory($data)
  {
    if(isset($data) && !is_null($data)){
      // print_r($data); die;
      $update_fetch = array();
      $update_sql="SELECT * FROM inventory WHERE id = '".$data['id']."'";
      $update_result=mysqli_query($this->inventory,$update_sql);
      $update_count=mysqli_num_rows($update_result);
      if ($update_count == 1){
        while($row = mysqli_fetch_assoc($update_result))
        {
          array_push($update_fetch, $row);
        }
      }
      else{
        $update_fetch = "no result found";
      }
      return $update_fetch;
    }
  }

  public function remove_inventory($data)
  {
    if(isset($data) && !is_null($data)){
      $remove_sql="DELETE FROM inventory WHERE id= '".$data['id']."'";
      $remove_result=mysqli_query($this->inventory,$remove_sql);
      $remove_query = ($remove_result) ? "success" : "failure";
      return $remove_query;
    }
  }

  public function approve_inventory($data)
  {
    if(isset($data) && !is_null($data)){
      print_r($data); die;
      $inventory = "SELECT id from inventory where id ='".$data['id']."' ";
      $inventory_result=mysqli_query($this->inventory,$inventory);
      $inventory_count=mysqli_num_rows($inventory_result);
      if ($inventory_count == 1){
        $approve_sql = "UPDATE inventory SET status = '"Approved"' WHERE id = '".$data['id']."'";
        $approve_result = mysqli_query($this->inventory,$approve_sql);
      }
      else{
        $approve_result = "";
      }
      $approve_query = ($approve_result) ? "success" : "failure";
      return $approve_query;
    }
  }
}
?>
