$(document).ready(function(){
$.ajax({ url: '../inventory_sample/webservice/list-inventory.php',
        context: document.body,
        success: function(response){
           // alert("done");
           // var obj = JSON.parse(response);
           console.log(response);
           $('#manage_inventory').html(obj);
        }});
});
