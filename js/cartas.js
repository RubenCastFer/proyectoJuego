            var ejec=0;
            var click = 0;
            var foto1;
            var foto2;
$(function () {

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
            json.sort(() => Math.random() - 0.5);
            var cuerpo = $("#mostrar");
            cuerpo
            var div1 = $("<div>", { "class": "row" });
            cuerpo.append(div1);
            var contador = 0;
            for (let i = 0; i < json.length; i++) {
                //for (let z = 0; z < 4; z++) {
                var div2 = $("<div>", { "class": " col-2 mb-4 mt-4 card-grid" });

                div1.append(div2);
                var divImg1 = $("<div>", { "class": "frente tam oculto" })
                var img1 = $("<img>", { "src": json[contador].img, "class": "w-100 h-100 " + json[contador].id, "alt":json[contador].name })
                divImg1.append(img1);
                var divImg2 = $("<div>", { "class": "atras tam visible" })
                var img2 = $("<img>", { "src": "./img/andalucia.png", "class": "w-100 h-100" })
                divImg2.append(img2);

                div2.append(divImg2);
                div2.append(divImg1);


                contador++

                //}

            }
            
            //al hacer click sobre la imagen
            $("img").click(function (event) {
                if (ejec==0) {
                    ejec=1;  
                    
                    if ($(this).parent().attr("class") == "atras tam visible") {
                        click++;
                        $(this).parent().addClass("rotar");
                        setTimeout(() => {
                            $(this).parent().removeClass("rotar");
                            $(this).parent().addClass("oculto");
                            $(this).parent().next().removeClass("oculto");
                            $(this).parent().removeClass("visible");
                            $(this).parent().next().addClass("visible")
                            if (click == 1) {
                                foto1 = $(this).parent().next().children();
                                //console.log(click);
                            } else if(click == 2){
                                //console.log(click);
                                click = 0;
                                //console.log(click);
                                foto2 = $(this).parent().next().children();
                               
                                //Comparo que las dos fotos vueltas sean iguales
                                if (foto1.attr("class") == foto2.attr("class")) {
                                    // foto1 = "";
                                    // foto2 = "";
                                  
                                   swal(foto1.attr("alt"));
                                    //añadir puntuacion y un span con el nombre;
                                   
                                } else {
                                    foto1.parent().addClass("rotar");
                                    foto2.parent().addClass("rotar");
                                    setTimeout(() => {
                                        foto1.parent().removeClass("rotar");
                                        foto1.parent().prev().removeClass("oculto");
                                        foto1.parent().removeClass("visible");
                                        foto1.parent().prev().addClass("visible");
                                        foto1.parent().addClass("oculto");
    
                                        foto2.parent().removeClass("rotar");
                                        foto2.parent().prev().removeClass("oculto");
                                        foto2.parent().removeClass("visible");
                                        foto2.parent().prev().addClass("visible");
                                        foto2.parent().addClass("oculto");

                                        //quitar intento y si los intentos llegan a 0 restar una vida
                                    }, 1000);
                                }
                            }
                            // console.log("foto1 = " + foto1.attr("class"));
                            // console.log("foto2 = " + foto2.attr("class"));
                            ejec=0; 
                        }, 1400); 
                    }
                     
                }
                //console.log($(this).parent().attr("class"));
                //console.log($(this).parent().next().children().attr("class"));

                
            })
        }
    });
});
