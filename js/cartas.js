var ejec = 0;
var click = 0;
var foto1;
var foto2;

var vida = sessionStorage.getItem("vida");
var nivel = sessionStorage.getItem("nivel");
var puntuacionFinal = sessionStorage.getItem("puntuacionFinal");

// var vida =1;
// var nivel =1;
var puntuacion = 0;
var intentos = 8;
const limite = 0



$(function () {
    $("alt").animate({
        left: '10px',
        opacity: '0.5',
        height: '12px',
        width: '12px'
    });


    var mostrarVida = document.getElementById("vidas");
    mostrarVida.innerHTML = "Vidas " + vida;

    var mostrarIntentos = document.getElementById("intentos");
    mostrarIntentos.innerHTML = "Intentos " + intentos;

    var liPunt = document.getElementById("puntuacion");
    liPunt.innerHTML = "Puntuación " + puntuacion;

    var parametros = {
        nivel: nivel,




    };
    $.ajax({
        data: parametros,
        url: './models/juegoModel.php',
        type: 'post',
        success: function (result) {
            var json = JSON.parse(result);
            json.sort(() => Math.random() - 0.5);

            var cuerpo = $("#mostrar");

            var div1 = $("<div>", { "class": "row centrar" });
            cuerpo.append(div1);

            for (let i = 0; i < json.length; i++) {

                var div2 = $("<div>", { "class": " col  m-2 card-grid" });
                div1.append(div2);

                var divImg1 = $("<div>", { "class": "frente tam oculto" })
                var img1 = $("<img>", { "src": json[i].img, "class": "w-100 h-100 " + json[i].id, "alt": json[i].name })
                divImg1.append(img1);

                var divImg2 = $("<div>", { "class": "atras tam visible" })
                var img2 = $("<img>", { "src": "./img/andalucia.png", "class": "w-100 h-100" })
                divImg2.append(img2);

                div2.append(divImg2);
                div2.append(divImg1);
            }
            const cantidad = (json.length / 2) * 100;
            //al hacer click sobre la imagen
            $("img").click(function (event) {
                if (ejec == 0) {
                    ejec = 1;

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
                            } else if (click == 2) {
                                //console.log(click);
                                click = 0;
                                //console.log(click);
                                foto2 = $(this).parent().next().children();

                                //Comparo que las dos fotos vueltas sean iguales
                                if (foto1.attr("class") == foto2.attr("class")) {
                                    // foto1 = "";
                                    // foto2 = "";


                                    liPunt = document.getElementById("puntuacion");
                                    puntuacion += 100;
                                    liPunt.innerHTML = "Puntuación " + puntuacion;

                                    if (puntuacion == cantidad) {
                                        //no esta saltando
                                        alert("has pasado de nivel, mastodonte");
                                        swal("A la siguiente ronda", "mastodonte", "success");
                                        sessionStorage.setItem("vida", vida);
                                        sessionStorage.setItem("nivel", ++nivel);
                                        puntuacionFinal = puntuacionFinal + puntuacion;
                                        sessionStorage.setItem("puntuacionFinal", puntuacionFinal);


                                        if (nivel > 1) {
                                            intentos = 12;
                                        } else {
                                            intentos = 8;
                                        }

                                        setTimeout(function () { window.location.href = "index.php?controller=juego&action=cartas"; }, 2000);

                                    }


                                    swal(foto1.attr("alt"));
                                    //añadir puntuacion y un span con el nombre;




                                } else {
                                    intentos--;
                                    var liInt = document.getElementById("intentos");
                                    liInt.innerHTML = "intentos " + intentos;

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

                                        if (intentos <= limite) {

                                            swal("eres un pringao", "ni esta aciertas", "error");


                                            sessionStorage.setItem("vida", --vida);
                                            sessionStorage.setItem("nivel", "1");
                                            puntuacionFinal = puntuacionFinal + puntuacion;
                                            sessionStorage.setItem("puntuacionFinal", puntuacionFinal);
                                            if (vida == 0) {
                                                // no funciona arreglar q guarde puntuacion en tabla
    
                                                document.cookie = "puntuacionFinal" + "=" + puntuacionFinal;
                                                setTimeout(function () { window.location.href = "index.php?controller=juego&action=listarPuntuaciones"; }, 2000);
    
    
                                            } else{
                                                setTimeout(function () { window.location.href = "index.php?controller=juego&action=cartas"; }, 2000);
                                            }
                                        }

                                        
                                        //quitar intento y si los intentos llegan a 0 restar una vida
                                    }, 1000);
                                }
                            }
                            // console.log("foto1 = " + foto1.attr("class"));
                            // console.log("foto2 = " + foto2.attr("class"));
                            ejec = 0;
                        }, 1400);
                    }

                }
                //console.log($(this).parent().attr("class"));
                //console.log($(this).parent().next().children().attr("class"));


            })
        }
    });
});
