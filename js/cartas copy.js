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
                for (let i = 0; i < json.length; i++) {
                    //for (let z = 0; z < 4; z++) {
                        var div2 = $("<div>",{"class":" col-2 mb-4 mt-4 card-grid "})
                        div1.append(div2);
                        var divImg1 = $("<div>",{"class":" flip"})
                        var img1 = $("<img>",{"src":"./img/andalucia.png", "class":"w-100 h-100 flip-1"})
                        var img2 = $("<img>",{"src":json[contador].img, "class":"w-100 h-100 flip-2"+json[contador].id})
                        divImg1.append(img1);
                        divImg1.append(img2);

                        
                        div2.append(divImg1);


                         contador++
                        
                    //}

                    
                }
                var click=0;
                var foto1;
                var foto2;
                
                $("img").click(function () {
                $(this).addClass("rotar");
            })
               

                


            }

        });
 
        

});