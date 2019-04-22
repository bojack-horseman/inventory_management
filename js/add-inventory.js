$(document).ready(function(){
  $('form[name="inventory-form"]').submit(function(e){
    e.preventDefault();
    var form_data = $('form[name="inventory-form"]').serializeArray();
    $.ajax({
      type:'POST',
      url: '../inventory_sample/webservice/add-inventory.php',
      data: form_data,
      success: function(response){
        //console.log(response);
        var obj = JSON.parse(response);
        if (obj == "success"){
          $('#myModal').modal("hide");
          setTimeout(function(){// wait for 3 secs(2)
            window.location.reload(); // then reload the page.(3)
          }, 3000);
        }
        else{
          alert("insertion failed");
        }
      }
    });
  });
});
