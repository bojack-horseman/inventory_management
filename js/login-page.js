$(document).ready(function(){
  $('form[name="login-form"]').submit(function(e){
    e.preventDefault();
    var form_data = $('form[name="login-form"]').serializeArray();
    $.ajax({
      type:'POST',
      url: '../inventory_sample/webservice/login-data.php',
      data: form_data,
      success: function(response){
        var obj = JSON.parse(response);
        if (obj == 1){
          window.location.href='manage-inventory.php';
        }
        else{
          window.location.href='login-page.php';
        }
      }
    });
  });
});
