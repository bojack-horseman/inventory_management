<?php
// Start your session
session_start();
//Read your session (if it is set)
if (isset($_SESSION['id']) && isset($_SESSION['loggedIN'])){
  $user_type = $_SESSION['usertype'];
}
else{
  header("location: login-page.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <title>Inventory Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" type="text/css" href="css/manage_inventory.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
  <?php include 'header.php';?>
  <div id="manage_inventory" class=""></div>
  <div class="container-fluid">
    <div class="row mt-2">
      <!-- <div class=" w-100"> -->
      <div class="col-10 bg-dark">
        <div class="float-left p-2">
          <h4 class="text-white">Add Inventory</h4>
        </div>
      </div>
      <div class="col-2 bg-dark">
        <div class="float-right p-2">
          <input type="button" value="+" class= "btn btn-dark" data-toggle="modal" data-target="#myModal"/>
        </div>
      </div>
      <!-- </div> -->
      <div class="col-12">
        <div class="table-responsive table-wrapper">
          <table class="table table-style">
            <thead class="heading-box">
              <tr>
                <th class="table-heading">Name</th>
                <th class="table-heading">Condition</th>
                <th class="table-heading">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="table-details">BOOK</td>
                <td class="table-details">New/Old</td>
                <td class="table-details">Pending
                  <div class="edit-button" data-toggle="dropdown">
                    <div class="dropdown-menu">
                      <a class="dropdown-item dropdown-links" href="#">delete</a>
                      <a class="dropdown-item " href="#">edit</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Add To Inventory</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form action="#" class="p-4" name="login-form" method="POST">
              <div class="row">
                <div class="col-6 pl-0">
                  <div class="form-group">
                    <input type="text" class="form-control" id="product_id" placeholder="Product ID" name="product_id" required>
                  </div>
                </div>
                <div class="col-6 pr-0">
                  <div class="form-group">
                    <input type="text" class="form-control" id="product_name" placeholder="Product Name" name="product_name" required>
                  </div>
                </div>
                <div class="col-6 pl-0">
                  <div class="form-group">
                    <input type="text" class="form-control" id="vendor" placeholder="Vendor" name="vendor" required>
                  </div>
                </div>
                <div class="col-6 pr-0">
                  <div class="form-group">
                    <input type="number" min="0" class="form-control" id="mrp" placeholder="M.R.P" name="mrp" required>
                  </div>
                </div>
                <div class="col-6 pl-0">
                  <div class="form-group">
                    <input type="number" class="form-control" id="batch_number" placeholder="Batch Number" name="batch_number" required>
                  </div>
                </div>
                <div class="col-6 pr-0">
                  <div class="form-group">
                    <input type="date" class="form-control" id="batch_date" placeholder="Batch Date" name="batch_date" required>
                  </div>
                </div>
                <div class="col-12 px-0">
                  <div class="form-group">
                    <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity" required>
                  </div>
                </div>
                <button type="submit" class="btn btn-success btn-block" id="login_submit">Submit</button>
              </div>
            </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php';?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/manage-inventory.js"></script>
</html>
