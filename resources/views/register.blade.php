<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="./css/login.css">

    <title>C&SCOSMETICS - LOGIN</title>
  </head>
  <body>
   <div class="container">
     <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-8 col-sm-8">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">C&SCOSMETICS Registro</h2>
          </div>
          <div class="card-body">
            <form method="post" :action="url('/producto')" name="formulario" id="formulario" >
              <div class="mb-4">
                <label for="fullname" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="mb-4">
                <label for="username" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="user_name">
              </div>
              <div class="mb-4">
                <label for="email" class="form-label">Correo</label>
                <input type="email" class="form-control" id="email">

              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password">
              </div>

              <div class="d-grid">
                <button type="submit" class="btn-log">Registrar</button>
                <h3 style="font-size: small;">Al registrarte, estas aceptando nuestras condiciones de uso y politicas de privacidad</h3>
              </div>

              <div>
                <p>¿Ya tienes una cuenta? <a href="../vistas/login.html">Login</a> </p>
              </div>





            </form>
          </div>
        </div>
      </div>
     </div>

   </div>
  </body>
</html>
