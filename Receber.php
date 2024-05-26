<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transporte de Encomendas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>

  <style>  
    .container {
     max-width: 800px;
     margin-top: 15%;
   }

   .form-control{
    background-color: whitesmoke;
   }
 </style>

</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: rgb(5, 5, 5);">
            
            <figure>
                <img src="imagem/logo5.png" alt="logo" id="logo">
                </figure>

            <div class="container-fluid">
     
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Home.php" style="color:white; text-decoration: solid; text-decoration-line: underline; text-decoration-color: aqua; text-decoration-style: solid; text-decoration-thickness: 4px;">HOME</a>
             </li>

             <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="A_Empresa.php" style="color:white">A EMPRESA</a>
            </li>
             
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color:white">SERVIÇOS</a>
            </li>
             
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
                 SHOPPING EXPRESS
               </a>
               <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="Shopping.php">ON-LINE SHOPPING</a></li>	   
               </ul>
             </li>

             <li class="nav-item">
               <a class="nav-link" href="Contacto.php" style="color:white">CONTACTO</a>
             </li>
             
             </ul>
             </div>
             </div>
             </nav>
    </header>

    <section style="font-family:Lato, Lato, sans-serif; font-size:14px;">
        <div>         
        <div id="barra"> </div>
  <div style="background-image: url(imagem/Lojad1.jpg); height: 400px; width: 100%;"> </div>
  <div class="cont">
    <h4 style="color: aqua;">Detalhes de facturação</h4>
    <form name="Receber" action="http://localhost/Projecto/proce.php" method="POST" enctype="application/x-www-form-urlencoded">
      <div class="form-group">
        <label for="nome" style="color: rgb(82, 82, 82);">Nome Completo:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required>
      </div>
      <div class="form-group">
        <label for="pais" style="color: rgb(82, 82, 82);">País ou Região:</label>
        <select class="form-control" id="pais">
          <option value="mozambique">Moçambique</option>
          <option value="africadosul">África do Sul</option>
          <option value="angola">Angola</option>
        </select>
      </div>
      <div class="form-group">
        <label for="morada1" style="color: rgb(82, 82, 82);">Morada:</label>
        <input type="text" class="form-control" name="morada1" id="morada1" placeholder="Nome da rua e numero da porta">
      </div>
      <div class="form-group">
        <label for="morada2" style="color: rgb(82, 82, 82);">Morada 2 (opcional):</label>
        <input type="text" class="form-control" id="morada2" name="morada2" placeholder="Morada linha2 (opcional)">
      </div>
      <div class="form-group">
        <label for="localidade" style="color: rgb(82, 82, 82);">Localidade:</label>
        <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Digite a localidade" required>
      </div>
      <div class="form-group">
        <label for="provincia" style="color: rgb(82, 82, 82);">Província:</label>
        <select class="form-control" id="provincia">
          <option value="maputo">Maputo</option>
          <option value="gaza">Gaza</option>
          <option value="inhambane">Inhambane</option>
          <option value="sofala">Sofala</option>
          <option value="manica">Manica</option>
          <option value="tete">Tete</option>
          <option value="zambezia">Zambezia</option>
          <option value="nampula">Nampula</option>
          <option value="cabodelgado">Cabo Delgado</option>
          <option value="niassa">Niassa</option>
        </select>
      </div>
      <div class="form-group">
        <label for="codigoPostal" style="color: rgb(82, 82, 82);">Código Postal:</label>
        <input type="text" class="form-control" name="codigoPostal" id="codigopostal" placeholder="Digite o código postal" required>
      </div>
      <div class="form-group">
        <label for="telefone" style="color: rgb(82, 82, 82);">Número de Telefone:</label>
        <input type="tel" class="form-control" id="telefone" name="contacto" placeholder="Digite seu número de telefone" required>
      </div>
      <div class="form-group">
        <label for="email" style="color: rgb(82, 82, 82);">Endereço de Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu endereço de email" required>
      </div>

      <div class="container">
        <hr>
        <h4 style="color: aqua;">A sua encomenda</h4>
       
          <div class="form-group">
            <label for="produto" style="color: rgb(82, 82, 82);">Nome do Produto:</label>
            <input type="text" class="form-control" id="produto" name="produto" placeholder="Digite o nome do produto">
          </div>
          <div class="form-group">
            <label for="categoria" style="color: rgb(82, 82, 82);">Categoria:</label>
            <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Digite a categoria do produto">
          </div>
        
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</html>
