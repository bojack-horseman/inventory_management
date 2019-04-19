$(document).ready(function(){
  $.ajax({ url: '../inventory_sample/webservice/list-inventory.php',
  context: document.body,
  success: function(response){
    //console.log(response);
    var obj = JSON.parse(response);
    //console.log(obj);
    for(var i =0;i < obj.length; i++)
    {
      $('#product').append('<tr id ="product"><td class="table-details">'+obj[i]["product_name"]+'</td><td class="table-details">'+obj[i]["vendor"]+'</td><td class="table-details">'+obj[i]["quantity"]+'</td><td class="table-details">'+obj[i]["mrp"]+'</td><td class="table-details">'+obj[i]["status"]+'<div class="edit-button" data-toggle="dropdown"><div class="dropdown-menu"><a class="dropdown-item dropdown-links" href="#">delete</a><a class="dropdown-item " href="#">edit</a></div></div></td></tr>');
    }
  }});
});
