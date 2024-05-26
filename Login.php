<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width device-width, initial-scale=1. 0">
  <title>Login</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body style="background-image: url(imagem/fff.jpg); font-family: Arial, sans-serif;">
  <div class="containers">
    <h1>Login</h1>
    <form name="Login" action="http://localhost/Projecto_BilaExpress/process.php" method="POST" enctype="application/x-www-form-urlencoded">
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="nome" placeholder="O Seu Nome" required>
      </div>
      <div class="form-group">
        <label for="contacto">Contacto:</label>
        <input type="tel" id="contact" name="contacto" placeholder="+258 - 87109900" min="9" max="9" required>
      </div>
      <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" placeholder="********" required>
      </div>

        <div style="display: inline-flex;">
            <div class="form-group">
                <input type="submit">
            </div>
            <div>
               <a href="Inicio.php"> <button type="button" class="btn btn-light" style=" cursor: pointer; height: 33px; width: 90px; margin-left: 30px; background-color: tomato; color: white;">Voltar</button> </a>
            </div>
          </div>
       
      </div>
    </div>
    </form>
  </div>
</body>
</html>
