$(document).on("click", ".delete-click", function(event){
  event.stopPropagation();
  var params = {};
  params['id'] = $(this).closest('tr').find('.product_id').text();
  $.ajax({
    type:'POST',
    url: '../inventory_sample/webservice/remove-inventory.php',
    data: params,
    success: function(response){
      var obj = JSON.parse(response);
      console.log(obj);
      if (obj == "success"){
        setTimeout(function(){// wait for 3 secs(2)
          window.location.reload(); // then reload the page.(3)
        }, 3000);
      }
      else{
        alert("deletion failed");
      }
    }
  });

});
