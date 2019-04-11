function ajax_login(){
    // console.log("hi");
    var form_data = $('form[name="login-form"]').serializeArray();
    // console.log($('form[name="login-form"]').serializeArray());
    $.ajax({
        type:'POST',
        url: '../webservice/login-data.php',
        data: form_data,
        success: function(response){
            //console.log('sad'+response);

            // $('form[name="quiz-form"]').submit();
        }
        //
    });
}
