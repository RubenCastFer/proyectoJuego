$(function(){
    $("#boton").click(function() {
        var valorNivel=$("#nivel").val();
    
        var parametros = {
            nivel: valorNivel,
            
    
        };
        $.ajax({
            data: parametros,
            url: './models/juegoModel.php',
            type: 'post',
            success: function (result) {
                var json = JSON.parse(result)
                var cuerpo = $("#mostrarCartas")
                cuerpo.append($("<p>", {"text":"funciona ajax"}))

            }

        });
    });
   

});