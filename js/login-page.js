$(document).ready(function(){
  $('form[name="login-form"]').submit(function(e){
    // console.log("hi");
    e.preventDefault();
    var form_data = $('form[name="login-form"]').serializeArray();
    // console.log(form_data);
    $.ajax({
      type:'POST',
      url: '../inventory_sample/webservice/login-data.php',
      data: form_data,
      success: function(response){
        console.log(response);
        if (response == 1){
          window.location.href='manage-inventory.php';
        }
        else{
          window.location.href='login-page.php';
        }
      }
    });
  });
});
