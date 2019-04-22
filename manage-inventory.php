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
  <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
  <?php include 'header.php';?>
  <div class="container-fluid outer">
    <div class="row mt-2">
      <div class="col-10 bg-dark">
        <div class="float-left p-2">
          <h4 class="text-white">Inventory</h4>
        </div>
      </div>
      <div class="col-2 bg-dark">
        <div class="float-right p-2">
          <input type="button" value="+" id="button_add" class= "btn btn-dark" data-toggle="modal" data-target="#myModal"/>
        </div>
      </div>
      <div class="col-12">
        <image src="images/loader.gif" id="loading-image" class="mx-auto loader">
          <div class="table-responsive">
            <table class="table table-style">
              <thead class="heading-box">
                <tr>
                  <th class="table-heading">Name</th>
                  <th class="table-heading">Vendor</th>
                  <th class="table-heading">Quantity</th>
                  <th class="table-heading">MRP</th>
                  <th class="table-heading">Status</th>
                </tr>
              </thead>
              <tbody id ="product">
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
              <form action="#" class="p-4" name="inventory-form" method="POST">
                <div class="row">
                  <div class="col-12 px-0 d-none">
                    <div class="form-group">
                      <input type="hidden" class="form-control" id="id" placeholder="id" name="id" value="">
                    </div>
                  </div>
                  <div class="col-12 px-0 d-none">
                    <div class="form-group">
                      <input type="hidden" class="form-control" id="user_type" placeholder="usertype" name="user_type" value="<?php echo $user_type;?>">
                    </div>
                  </div>
                  <div class="col-12 px-0">
                    <div class="form-group">
                      <input type="text" class="form-control" id="product_id" placeholder="Product id" name="product_id" required>
                    </div>
                  </div>
                  <div class="col-6 pl-0">
                    <div class="form-group">
                      <input type="text" class="form-control" id="product_name" placeholder="Product Name" name="product_name" required>
                    </div>
                  </div>
                  <div class="col-6 pr-0">
                    <div class="form-group">
                      <input type="number" class="form-control" min="0" id="quantity" placeholder="Quantity" name="quantity" required>
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
                      <input type="text" class="form-control" id="batch_number" placeholder="Batch Number" name="batch_number" required>
                    </div>
                  </div>
                  <div class="col-6 pr-0">
                    <div class="form-group">
                      <input type="date" class="form-control" id="batch_date" placeholder="Batch Date" name="batch_date" required>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success btn-block" id="addinventory_submit">Submit</button>
                  <button type="submit" class="btn btn-warning d-none btn-block" id="updateinventory_submit">Update</button>
                </div>
              </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
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
  <script src="js/add-inventory.js"></script>
  <script src="js/update-inventory.js"></script>
  <!-- <script src="js/inventory-update.js"></script> -->
  <script src="js/remove-inventory.js"></script>
  </html>
