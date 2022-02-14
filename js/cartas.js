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
                var json = JSON.parse(result);
              
                var cuerpo = $("#mostrar");
                cuerpo
                var div1 = $("<div>",{"class":"row"});
                cuerpo.append(div1);
                var contador=0;
                for (let i = 0; i < 2; i++) {
                    for (let z = 0; z < 4; z++) {
                        var div2 = $("<div>",{"class":"col-3 mb-4 mt-4"})
                        div1.append(div2);
                        var img = $("<img>",{"src":json[contador].img,"class":"w-100 h-100"})
                        div2.append(img);

                        contador++
                        
                    }
                    
                }
            }

        });
 
   

});