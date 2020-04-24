$(document).ready(function(){
    //initialize
    userlist();
    var table = $('#mytable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdfHtml5', 'print'
        ],
        order: [[ 1, "asc" ]],
    });
    var data = JSON.parse(result);
    table.rows.add(data).draw();
  });
  //
  $('#frm').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'http://localhost/vue/ecommerce/public/userstore',
        data: $("#frm").serialize(),
        success: function (response){
            $("#modal").modal('hide');
            $("#frm").reset();
            userlist();
            console.log('done');
            //window.location = 'http://localhost/vue/ecommerce/public/user';
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
          url: 'http://localhost/vue/ecommerce/public/deleteuser',
        data:{
              id:id,
            },
          success: function(response){
              userlist();
              alert('Removed Data Successfully');
         }
      });
  }
  function updatename(id){
    var name = $('#name'+id).html();
    $.ajax({
      type: "GET",
      url: 'http://localhost/vue/ecommerce/public/updateuser',
    data:{
          id:id,
          name:name,
        },
      success: function(response){
          userlist();
          console.log(name);
     }
  });
  }
  function updatemobile(id){
    var name = $('#mobile'+id).html();
    $.ajax({
      type: "GET",
      url: 'http://localhost/vue/ecommerce/public/updateuser',
    data:{
          id:id,
          mobile:name,
        },
      success: function(response){
          userlist();
          console.log('update successfully');
     }
  });
  }
  function updateemail(id){
    var name = $('#email'+id).html();
    $.ajax({
      type: "GET",
      url: 'http://localhost/vue/ecommerce/public/updateuser',
    data:{
          id:id,
          email:name,
        },
      success: function(response){
          userlist();
          console.log('update successfully');
     }
  });
  }
  function updateaddress(id){
    var name = $('#address'+id).html();
    $.ajax({
      type: "GET",
      url: 'http://localhost/vue/ecommerce/public/updateuser',
    data:{
          id:id,
          address:name,
        },
      success: function(response){
          userlist();
          console.log('update successfully');
     }
  });
  }
  function updatecompany(id){
    var name = $('#company'+id).html();
    $.ajax({
      type: "GET",
      url: 'http://localhost/vue/ecommerce/public/updateuser',
    data:{
          id:id,
          company:name,
        },
      success: function(response){
          userlist();
          console.log('update successfully');
     }
  });
  }
  function userlist(){
    $.ajax({
        type: 'GET',
        url: 'http://localhost/vue/ecommerce/public/userlist',
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