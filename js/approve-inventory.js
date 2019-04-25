$(document).on("click", ".approve-click", function(event){
  if($("#user_type").val() == 1){
    event.stopPropagation();
    var params = {};
    params['id'] = $(this).closest('tr').find('.product_id').text();
    $.ajax({
      type:'POST',
      url: '../inventory_sample/webservice/approve-inventory.php',
      data: params,
      success: function(response){
        var obj = JSON.parse(response);
        console.log(obj);
        if (obj == "success"){
          setTimeout(function(){// wait for 1 sec(2)
            window.location.reload(); // then reload the page.(3)
          }, 1000);
        }
        else{
          alert("approval failed");
        }
      }
    });
  }
  else{
    alert("don't have access to remove, contact Admin");
  }
});
