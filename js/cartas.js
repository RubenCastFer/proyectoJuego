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
                        var div2 = $("<div>",{"class":" col-2 mb-4 mt-4 card-grid"});
                        
                        div1.append(div2);
                        var divImg1 = $("<div>",{"class":"frente tam oculto"})
                        var img1 = $("<img>",{"src":json[contador].img, "class":"w-100 h-100 "+json[contador].id})
                        divImg1.append(img1);
                        var divImg2 = $("<div>",{"class":"atras tam visible"})
                        var img2 = $("<img>",{"src":"./img/andalucia.png", "class":"w-100 h-100"})
                        img2.attr("id", "rotar");
                        divImg2.append(img2);

                        div2.append(divImg2);
                        div2.append(divImg1);


                         contador++
                        
                    //}
                    
                }
                var click=0;
                var foto1;
                var foto2;
                $("img").click(function(){
                    //console.log($(this).parent().attr("class"));
                    //console.log($(this).parent().next().children().attr("class"));
                    
                    if ($(this).parent().attr("class")=="atras tam visible") {
                        click++;
                        $(this).parent().addClass("rotar");
                        setTimeout(() => {
                            $(this).parent().removeClass("rotar");
                            $(this).parent().addClass("oculto");
                            $(this).parent().next().removeClass("oculto");
                            $(this).parent().removeClass("visible");
                            $(this).parent().next().addClass("visible")
                            if (click==1) {
                                foto1=$(this).parent().next().children().attr("class");
                            }else if(click==2){
                                click=0;
                                foto2=$(this).parent().next().children().attr("class");
                            }
                            console.log("foto1 = "+foto1);
                            console.log("foto2 = "+foto2);
                        }, 1400);
                       
                       
                    }
                    
                   

                    

                    // $(this).parent().next().removeClass("oculto");
                    // $(this).parent().removeClass("visible");
                    // $(this).parent().next().addClass("visible")
                    // $(this).parent().addClass("oculto");
                    // $(this).parent().prev().addClass("visible");
                    // $(this).parent().addClass("oculto");
                    // $(this).parent().prev().removeClass("oculto");
                    // $(this).parent().removeClass("visible");
                    
                    
                })

               

                


            }

        });
 
   

});