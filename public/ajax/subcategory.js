$(document).ready(function(){
    //initialize
    subcategorylist();
  });
  //
  $('#frm').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'http://localhost/vue/ecommerce/public/subcategorystore',
        data: $("#frm").serialize(),
        success: function (response){
            $("#modal").modal('hide');
            subcategorylist();
            console.log('done');
        },
        error: function(error){
            $("#modal").modal('hide');
            alert('error');
        }
    });
  });
  function remove(id){
    // var identity='deleteEmployeeModal'+id;
    // var x = document.getElementById(identity);
      console.log(id);
      $.ajax({
          type: "GET",
          url: 'http://localhost/vue/ecommerce/public/deletesubcategory',
        data:{
              id:id,
            },
          success: function(response){
              subcategorylist();
              alert('Removed Data Successfully');
         }
      });
  }
  function update(id){
    var name = $('#'+id).html();
    $.ajax({
      type: "GET",
      url: 'http://localhost/vue/ecommerce/public/updatesubcategory',
    data:{
          id:id,
          name:name,
        },
      success: function(response){
          subcategorylist();
          console.log('update successfully');
     }
  });
  }
  function subcategorylist(){
    $.ajax({
        type: 'GET',
        url: 'http://localhost/vue/ecommerce/public/subcategorylist',
        success: function (response){
          //console.log(response);
          //  var trHTML='';var s=1;
          //  for(var i=0;i<response.length;i++){
          //   trHTML+='<tr><td>'+s+'</td><td>'+response[i]['name']+'</td><td>'+response[i]['userid']+'</td><td>'+response[i]['status']+'</td><td><a onclick="update()" data-toggle="modal" data-target="modal">Modify</a> | <a>Delete</a> </td></tr>';
          //   s+=1;
          //  }
           $('#mytable tbody').html(response);
        },
        error: function(error){ 
            alert('error');
        }
    }); 
  }