$(document).ready(function(){
  $('#loading-image').show();
  $.ajax({ url: '../inventory_sample/webservice/list-inventory.php',
  context: document.body,
  success: function(response){
    //console.log(response);
    var obj = JSON.parse(response);
    //console.log(obj);
    for(var i =0;i < obj.length; i++)
    {
      $('#product').append('<tr id ="product_list"><td class="table-details d-none product_id">'+obj[i]["id"]+'</td><td class="table-details">'+obj[i]["product_name"]+'</td><td class="table-details">'+obj[i]["vendor"]+'</td><td class="table-details">'+obj[i]["quantity"]+'</td><td class="table-details">'+obj[i]["mrp"]+'</td><td class="table-details">'+obj[i]["status"]+'<div class="btn-group" id="myDropdown"><a class="edit-button d-inline-block ml-2" data-toggle="dropdown"></a><ul class="dropdown-menu"><li><a class="delete-click p-2 btn">delete</a></li><li><a class="edit-click p-2 btn">edit</a></li><li><a class="approve-click p-2 btn">approve</a></li></ul></div></td></tr>');
    }
  },
  complete: function(){
    $('#loading-image').hide();
  }
});
});
