$(document).ready(function(){
  $('form[name="inventory-form"]').submit(function(e){
    e.preventDefault();
    var form_data = $('form[name="inventory-form"]').serializeArray();
    console.log(form_data);
    $.ajax({
      type:'POST',
      url: '../inventory_sample/webservice/add-inventory.php',
      data: form_data,
      success: function(response){
        // console.log(response);
        // var userType = (response == "success") ? $('myModal'). : "Adult";
        var obj = JSON.parse(response);
        if (obj == "success"){
          $('#myModal').modal("hide");
          // $('#product').append('<tr id ="product"><td class="table-details">'+obj[i]["product_name"]+'</td><td class="table-details">'+obj[i]["vendor"]+'</td><td class="table-details">'+obj[i]["quantity"]+'</td><td class="table-details">'+obj[i]["mrp"]+'</td><td class="table-details">'+obj[i]["status"]+'<div class="edit-button" data-toggle="dropdown"><div class="dropdown-menu"><a class="dropdown-item dropdown-links" href="#">delete</a><a class="dropdown-item " href="#">edit</a></div></div></td></tr>');
        }
        else{
          alert("insertion failed");
        }
      }
    });
  });
});
