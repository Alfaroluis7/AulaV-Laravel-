function Mostrar(btn){
    console.log(btn.value);

    var route= "http://localhost:8000/Curso/"+btn.value+"/Edit";


    $.get(route, function(res){
        $("#nameEdit").val(res.nombre);
        $("#costo2").val(res.costo);
        $("#descripcion2").val(res.Descripcion);
        $("#fechaI").val(res.Fecha_Inicio);
        $("#fechaF").val(res.Fecha_Fin);
    });
}

