$(document).on("click", ".edit-click", function(event){
  if($("#user_type").val() == 1){
    event.stopPropagation();
    // console.log("event");
    var params = {};
    params['id'] = $(this).closest('tr').find('.product_id').text();
    // if()
    // console.log(val);
    $.ajax({
      type:'POST',
      url: '../inventory_sample/webservice/update-inventory.php',
      data: params,
      success: function(response){
        //console.log(response);
        var obj = JSON.parse(response);
        //console.log(obj);
        for(var i =0;i < obj.length; i++)
        {
          $('#myModal').modal("show");
          $("#id").val(obj[i]["id"]);
          $("#product_id").val(obj[i]["product_id"]);
          $("#product_name").val(obj[i]["product_name"]);
          $("#quantity").val(obj[i]["quantity"]);
          $("#vendor").val(obj[i]["vendor"]);
          $("#mrp").val(obj[i]["mrp"]);
          $("#batch_number").val(obj[i]["batch_number"]);
          $("#batch_date").val(obj[i]["batch_date"]);
        }
      }
    });
  }
  else{
    alert("don't have access to update, contact Admin");
  }
});
