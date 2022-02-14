$(function(){

        // var valorNivel=$("#nivel").val();
    
        // var parametros = {
        //     nivel: valorNivel,
            
    
        // };
        $.ajax({
            // data: parametros,
            url: './models/juegoModel.php',
            type: 'post',
            success: function (result) {
                var json = JSON.parse(result)
                json.forEach(element => {
                    console.log(element);
                });
                var cuerpo = $("#mostrarCartas");
                cuerpo.append($("<p>", {"text":"funciona ajax"}));
                d.append($("<p>", {"text":"funciona ajax"}));
            }

        });
 
   

});