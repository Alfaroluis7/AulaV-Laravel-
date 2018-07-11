$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

$(document).ready(function(){
    var id;
    $('.btn-warning').click(function(e){
        e.preventDefault();
        var form = $(this).parents('form');
        id= $(this).attr('value');
        console.log(id);
        var route = form.attr('action');
        $.get(route, function(res){
            $("#nameEdit").val(res.nombre);
            $("#costo2").val(res.costo);
            $("#descripcion2").val(res.Descripcion);
            $("#fechaI").val(res.Fecha_Inicio);
            $("#fechaF").val(res.Fecha_Fin);
            $('#idid').val(res.id);
           
        });
    });

    $('#Act').click(function(e){
        e.preventDefault();
        var form = $(this).parents('form');
        var route = form.attr("action");
        var data = form.serialize();

        console.log(data);
        console.log(route);
     /*  var form = $(this).parents('form');
        var route = form.attr('action');
        var data = form.serialize();
*/
       $.post(route,data,function(){
        
         
       });
       
       /*
       $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: route,
        type: 'post',
        data: {data:data },
        cache: false,
        processData: false,
        dataType: 'json',
        success: function(data) {
            console.log(data);
        },
        error: function() {
            console.log('error');
        }
       });*/

       /* $.ajax({
        url: route,
        method: 'POST',
        cache: false,
        data: { data: data, _token: '{{csrf_token()}}' },
        success: function(data) {
            console.log(data);
        },
        error: function() {
            console.log('error');
        }
       });*/
 


    });


});
   
  

    
