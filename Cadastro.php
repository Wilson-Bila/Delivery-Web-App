<!DOCTYPE html>
<html lang="pt-pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Cadastro Express</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body id="corpo" style="background-image: url(imagem/fund.jpg);">
  <div class="containe">
    <h1 style="color: aqua; text-align:center; font-style: oblique;"> BILA </h1> 				
    <h1 style=" color: white; text-align: center; font-style: oblique;">EXPRESS</h1> <br> 
        
    <form name="Cadastro" action="http://localhost/Projecto_BilaExpress/processador.php" method="POST" enctype="application/x-www-form-urlencoded">
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="nome" required placeholder="Seu Nome Completo">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="seuemail@gmail.com">
      </div>
        <div class="form-group">
        <label for="contacto">Contacto:</label>
        <input type="text" id="contact" name="contacto" required placeholder="+258  ">
      </div>

      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" id="password" name="password" required placeholder="********">
      </div>

      <div style="display: inline-flex;">
      <div class="form-group">
        <input type="submit">
      </div>
      <div>
         <a href="Inicio.php"> <button type="button" class="btn btn-light" style=" cursor: pointer; height: 33px; width: 90px; margin-left: 30px;">Voltar</button> </a>
      </div>
    </div>
    </form>
  </div>
</body>
</html>


 
  