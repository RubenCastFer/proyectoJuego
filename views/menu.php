<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>

$(document).ready(function(){
  $("#escudo").click(function(){
    $(this).animate({height: "300px"});
  });
  $("#escudo").click(function(){
    $(this).animate({height: "250px"});
  });
});

$(document).ready(function(){
  $("#escudo").hover(function(){
    $(this).fadeTo(1000, 0.4);
  });
});
</script>
    <style>
        p{
            text-align: center;
        }
       #escudo{
           margin-left: 364px;
       }
        
        button{
            text-align: center;
        }
        .btn-circle.btn-xl {

            margin: 50px;
            align-items: center;
            justify-content: center;

            width: 70px;
            height: 70px;
            text-align: center;
            border-radius: 15px;
            font-size: 18px;
            line-height: 1.33;
            position: center;
        }
    </style>
</head>

<body>
    <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">

            <h2 class="Encabezado"></h2>

            <header class="p-3 bg-success text-white">
                <div class="container-fluid">
                    <div class="d-flex flex-wrap  justify-content-center ">
                        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                        </a>
                        <div class="container-fluid">
                            
                        <img src="../images/plaza_espanya.jpg" class="d-inline-block w-100" alt="12px" height="220px" >
                        </div>
                        
                            <div class="row text-white">
                                <button type="button" text-align="center" class="btn btn-primary btn-circle btn-xl" onclick="location.href=''"><i class="fa fa-list">
                                        <p>juega</p>
                                    </i>
                                </button>
                                <button type="button" text-align="center" class="btn btn-secondary btn-circle btn-xl" onclick="location.href='scoreView.html'"><i class="fa fa-list">
                                        <p>puntos</p>
                                    </i>
                                </button>
                                
                                </button>
                                <button type="button" class="btn btn-warning text-white btn-circle btn-xl"><i class="fa fa-heart"><p>rank</p></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-circle btn-xl" onclick="location.href='loginView.php'"><i class="fa fa-heart"><p>salir</p></i>
                                </button>
                            </div>

                        
                        
                          
                        
                        </form>


                    </div>
            </header>

                <div class="container-fluid bg-white">
                    <p><strong>Clicka o pasa el ratón por la imagen</strong></p>
                        <img src="../images/escudo.png" id="escudo" class="d-inline-block w-50" text-align="center" alt="12px" height="220px" >
                        </div>

        </div>
        <!-- /.panel-body -->
    </div>
</body>

</html>