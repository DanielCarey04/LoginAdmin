<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min"></script>
   
</head>
<body>
 
  <section>
   
  
  
    <div class="peliculas">
    <img src="assets/img/pop.png">
    </div>
    <div class="peliculas2">
    <img src="assets/img/chocolate.png">
    </div>
        <article class="col-lg-8 col-md-6">
         
            <div class="container">
              <h2>LOGIN</h2>

                <form method="POST" action="FrontEnd.html" onsubmit="return validar();" class="was-validated">

                  <div class="form-group">
                    <br>
                    <input type="text" class="form-control" id="Usuario" placeholder="Usuario" name="Usuario" required>
                    
                  <div class="form-group">
                    <br>
                    <br>
                    <input type="password" class="form-control" id="password" placeholder="Contraseña" name="passwword" required>
                    <br>
                    <br>
                  <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
              </div>
        </article>

    </section>
<footer >
        
    </footer>
</body>
</html>
<script src="assets/js/main.js"></script>
