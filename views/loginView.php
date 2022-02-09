<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Inicio Sesión</title>

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>


  <style>
    /* .container {
      background-image: url(images/alhambraLogin.jpg);
      background-size: auto 100%;
      background-position: center top;
      background-repeat: no-repeat;
    } */

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    html,
    body {
      height: 100%;
    }

    body {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      /* background-color: #f5f5f5; */
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }

    .form-signin .checkbox {
      font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>


  <!-- Custom styles for this template -->

</head>

<body class="text-center container">
  
  <main class="form-signin">
    <form method="POST" action="index.php?controller=usuarios&action=login">
      <h1 class="text-decoration-underline">TITULO</h1><br>
      <h1 class="h3 mb-3 fw-normal">Inicia Sesion</h1>

      <div class="form-floating">
        <input type="text" name="usuario" class="form-control opacity-75" id="floatingInput" placeholder="¿con qué nombre quieres jugar?" required>
        <label for="floatingInput">Usuario</label>
      </div>
      <div class="form-floating">
        <input type="password" name="pass" class="form-control opacity-75" id="floatingPassword" placeholder="Introduce tu nueva contraseña">
        <label for="floatingPassword">Contraseña</label>
      </div>
      <p><input class="w-100 btn btn-lg btn-primary" type="submit" value="Iniciar Sesion" /></p>
      
      <p class="text-white">¿No tienes una cuenta? <a href="views/signupView.php" class="text-white"  type="submit">Registrate ahora</a></p>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
  </main>
</body>
</html>