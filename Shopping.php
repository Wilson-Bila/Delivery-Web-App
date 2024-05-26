<!DOCTYPE html>
<html lang="pt-pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Express</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>

    <header>
    <nav class="navbar navbar-expand-lg" style="background-color: rgb(5, 5, 5); font-family:Lato, Lato, sans-serif; font-size:13px;">
				
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
          <a class="nav-link active" aria-current="page" href="Home.php" style="color:white;">HOME</a>
         </li>

         <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="A_Empresa.php" style="color:white">A EMPRESA</a>
        </li>
         
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color:white">SERVIÇOS</a>
        </li>
         
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;  text-decoration: solid; text-decoration-line: underline; text-decoration-color: aqua; text-decoration-style: solid; text-decoration-thickness: 4px;">
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
    <div class="accordion" id="accordionPanelsStayOpenExample" style="margin-left: 5%; margin-top: 3%;">
      <div class="accordion-item">
        <h5 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            Categoria: Vestuário
          </button>
        </h5>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
          <div class="accordion-body">
            <div style="text-align: justify; margin-top: 1%; display: inline-flex;">
              <div class="card" style="width: 15rem; margin-bottom: 13%; background-color: whitesmoke;">  <a href="Receber.php" style="text-decoration: none;">  
                 <img src="imagem/Dolce.jpg" class="card-img-top" alt="Shoes">
                 <div class="card-body2">
                   <h5 class="card-text" style="text-align: center; color: black;">Dolce & Gabanna Shoes</h5>
                   <p class="card-text" style="text-align: center; color: red;">Preço: 10,500 Mt</p>
                   <p class="card-text" style="text-align: center; color: green;">Tamanhos: 38-43 EUR</p> <br>
                 </div>
                </a>
               </div>
          
               <div class="card" style="width: 15rem; margin-bottom: 13%; background-color: whitesmoke; margin-left: 5%;">  <a href="Receber.php" style="text-decoration: none;">  
                <img src="imagem/Gabbana.jpg" class="card-img-top" alt="Shirt">
                <div class="card-body2">
                  <h5 class="card-text" style="text-align: center; color: black;">Dolce & Gabanna T-Shirt</h5>
                  <p class="card-text" style="text-align: center; color: red;">Preço: 3,700 Mt</p>
                  <p class="card-text" style="text-align: center; color: green;">Tamanhos: M, L & XL</p> <br>
                </div>
               </a>
              </div>
          
              <div class="card" style="width: 15rem; margin-bottom: 13%; background-color: whitesmoke; margin-left: 5%;">  <a href="Receber.php" style="text-decoration: none;">  
                <img src="imagem/Travis.png" class="card-img-top" alt="Cactus">
                <div class="card-body2">
                  <h5 class="card-text" style="text-align: center; color: black;">Cactus Jack T-Shirt</h5>
                  <p class="card-text" style="text-align: center; color: red;">Preço: 5,500 Mt</p>
                  <p class="card-text" style="text-align: center; color: green;">Tamanhos: M & L</p> <br>
                </div>
               </a>
              </div>
          
              <div class="card" style="width: 15rem; margin-bottom: 13%; background-color: whitesmoke; margin-left: 5%;">  <a href="Receber.php" style="text-decoration: none;">  
                <img src="https://i.pinimg.com/564x/42/15/d8/4215d8d9a04dc9ed331c4a6d6c354cf2.jpg" class="card-img-top" alt="Shoes">
                <div class="card-body2">
                  <h5 class="card-text" style="text-align: center; color: black;">Air Jordan CJ<br> Shoes</h5>
                  <p class="card-text" style="text-align: center; color: red;">Preço: 13,000 Mt</p>
                  <p class="card-text" style="text-align: center; color: green;">Tamanhos: 39-45 EUR</p> <br>
                </div>
               </a>
              </div>
          
             <div class="card" style="width: 15rem; margin-bottom: 13%; background-color: whitesmoke; margin-left: 5%;">  <a href="Receber.php" style="text-decoration: none;">  
                <img src="imagem/trouser.jpg" class="card-img-top" alt="calça">
                <div class="card-body2">
                  <h5 class="card-text" style="text-align: center; color: black;">Levi's Trouser</h5>
                  <p class="card-text" style="text-align: center; color: red;">Preço: 3,700 Mt</p>
                  <p class="card-text" style="text-align: center; color: green;">Tamanhos: 29-38</p> <br>
                </div>
               </a>
              </div>
          
              </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h5 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
            Categoria: Electrodomésticos
          </button>
        </h5>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
          <div class="accordion-body">
            <div style="text-align: justify; margin-top: 1%; display: inline-flex;">
              <div class="card" style="width: 15rem; margin-bottom: 13%; background-color: whitesmoke;">  <a href="Receber.php" style="text-decoration: none;">  
                 <img src="imagem/Geleira.jpg" class="card-img-top" alt="Geleira">
                 <div class="card-body2">
                   <h5 class="card-text" style="text-align: center; color: black;">Geleira</h5>
                   <p class="card-text" style="text-align: center; color: red;">Preço: 68,000,00 Mt</p>
                 </div>
                </a>
               </div>
          
               <div class="card" style="width: 15rem; margin-bottom: 13%; margin-left: 5%; background-color: whitesmoke;">  <a href="Receber.php" style="text-decoration: none;">  
                <img src="imagem/fogao.jpg" class="card-img-top" alt="fogao">
                <div class="card-body2">
                  <h5 class="card-text" style="text-align: center; color: black;">Fogão</h5>
                  <p class="card-text" style="text-align: center; color: red;">Preço: 55,000,00 Mt</p>
                </div>
               </a>
              </div>
          
              <div class="card" style="width: 15rem; margin-bottom: 13%; margin-left: 5%; background-color: whitesmoke;">  <a href="Receber.php" style="text-decoration: none;">  
                <img src="imagem/Micro-ondas.jpg" class="card-img-top" alt="Microwave">
                <div class="card-body2">
                  <h5 class="card-text" style="text-align: center; color: black;">Micro-ondas</h5>
                  <p class="card-text" style="text-align: center; color: red;">Preço: 35,000,00 Mt</p>
                </div>
               </a>
              </div>
          
              <div class="card" style="width: 15rem; margin-bottom: 13%; margin-left: 5%; background-color: whitesmoke;">  <a href="Receber.php" style="text-decoration: none;">  
                <img src="imagem/liquidificador.jpg" class="card-img-top" alt="Batedeira">
                <div class="card-body2">
                  <h5 class="card-text" style="text-align: center; color: black;">Liquidificador & Batedeira</h5>
                  <p class="card-text" style="text-align: center; color: red;">Preço: 25,000,00 Mt</p>
                </div>
               </a>
              </div>
          
             <div class="card" style="width: 15rem; margin-bottom: 13%; margin-left: 5%; background-color: whitesmoke;">  <a href="Receber.php" style="text-decoration: none;">  
                <img src="imagem/Ferro.jpg" class="card-img-top" alt="Ferro">
                <div class="card-body2">
                  <h5 class="card-text" style="text-align: center; color: black;">Ferro</h5>
                  <p class="card-text" style="text-align: center; color: red;">Preço: 2,000 Mt</p>
                </div>
               </a>
              </div>
          
              </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h5 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
            Categoria: Aparelhos Electrónicos
          </button>
        </h5>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show">
          <div class="accordion-body">
            <div style="text-align: justify; margin-top: 1%; display: inline-flex;">
              <div class="card" style="width: 15rem; margin-bottom: 13%; background-color: whitesmoke;">  <a href="Receber.php" style="text-decoration: none;">  
                 <img src="imagem/HP Envy.jpg" class="card-img-top" alt="Ananas">
                 <div class="card-body2">
                   <h5 class="card-text" style="text-align: center; color: black;">HP Envy </h5>
                   <p class="card-text" style="text-align: center; color: black;">Intel: Core i7-1195G7  (11th)<br>
                      SO: Windows 11<br> Memória: 16GB SDRAM<br> Armazenamento: 512GB SSD </p>
                     <p style="text-align: center; color: red;">Preço: 67,000,00 Mt</p> <br>
                  
                 </div>
                </a>
               </div>
          
               <div class="card" style="width: 15rem; margin-bottom: 13%; background-color: whitesmoke; margin-left: 5%;">  <a href="Receber.php" style="text-decoration: none;">  
                <img src="imagem/Lenovo.jpg" class="card-img-top" alt="Manga">
                <div class="card-body2">
                  <h5 class="card-text" style="text-align: center; color: black;">Lenovo IdeaPad3i</h5>
                  <p class="card-text" style="text-align: center; color: black;">Intel: Core i3-82BS0002BR (8th)<br>
                  SO: Windows 10 <br> Memória: 4GB DDRAM <br> Armazenamento: 1TB HD  
                  </p>
                  <p class="card-text" style="text-align: center; color: red;">Preço: 30,000,00 Mt</p>
                </div>
               </a>
              </div>
          
              <div class="card" style="width: 15rem; margin-bottom: 13%; background-color: whitesmoke; margin-left: 5%;">  <a href="Receber.php" style="text-decoration: none;">  
                <img src="imagem/HUAWEI.jpg" class="card-img-top" alt="Huawei">
                <div class="card-body2">
                  <h5 class="card-text" style="text-align: center; color: black;">Huawei Matebook D14</h5>
                  <p class="card-text" style="text-align: center; color: black;">Ryzen: 5 2500U <br>
                  SO: Windows 10<br>  Memória: 8GB DDRAM <br> Armazenamento: 256GB SSD
                  </p>
                  <p class="card-text" style="text-align: center; color: red;">Preço: 58,783,00 Mt</p>
                </div>
               </a>
              </div>
          
              <div class="card" style="width: 15rem; margin-bottom: 13%; background-color: whitesmoke; margin-left: 5%;">  <a href="Receber.php" style="text-decoration: none;">  
                <img src="imagem/MacBook.jpg" class="card-img-top" alt="MacBook">
                <div class="card-body2">
                  <h5 class="card-text" style="text-align: center; color: black;">Apple MacBook Pro-16</h5>
                  <p class="card-text" style="text-align: center; color: black;">Intel: Core i9 2.4GHz<br>
                  SO: OS 11.0 <br> Memória: 32GB RAM <br> Armazenamento: 1TB SSD
                  </p>
                  <p class="card-text" style="text-align: center; color: red;">Preço: 75,000,00 Mt</p>
                </div>
               </a>
              </div>
          
             <div class="card" style="width: 15rem; margin-bottom: 13%; background-color: whitesmoke; margin-left: 5%;">  <a href="Receber.php" style="text-decoration: none;">  
                <img src="imagem/LapDell.jpg" class="card-img-top" alt="Dell">
                <div class="card-body2">
                  <h5 class="card-text" style="text-align: center; color: black;">Dell XPS 15.6</h5>
                  <p class="card-text" style="text-align: center; color: black;">Intel: Core i5-8300H (8th)<br>
                  SO: Windows 10 <br>  Memória: 16GB SDRAM <br> Armazenamento: 512GB SSD
                  </p>
                  <p class="card-text" style="text-align: center; color: red;">Preço: 45,000,00 Mt</p>
                </div>
               </a>
              </div>
          
              </div>
          </div>
        </div>
      </div>
    </div>
 
 
</div>
</section>

  <footer  style="background-color: black">

    <div style="background-color: white; height: 10px;"> </div>
    <div id="barra2"></div>

    <br> <br> <div id="container">
        <div class="container text-center">
            <div class="row align-items-start">
                  <div class="col"> <br> <br>
                    <h2 style="color: aqua; margin-left: 15%; text-align:left; font-style: oblique;">BILA</h2> 
                    <h2 style=" color: white; margin-left: 15%; text-align: left; font-style: oblique;">EXPRESS</h2> <br> 
                  </div>

                  <div class="col"> <br> <br>
                        <a href="A_Empresa.php" class="foo" style="color: white; margin-top: 2%; text-decoration: none;">Sobre BILA Express</a> <br>
                        <a href="#" style="color: white; text-decoration: none;">Localização</a> <br>
                        <a href="Receber.php" style="color: white; text-decoration: none;">Entrega</a> <br> <br> <br>
                  </div>

                  <div class="col"> <br> <br>
                    <a href="#" style="color: white; margin-top: 2%; text-decoration: none;">Contacte-nos</a> <br>
                    <a href="Shopping.php" style="color: white; text-decoration: none;">Shopping</a> <br>
                    <a href="#" style="color: white; text-decoration: none;">Horários</a> <br> <br> <br>
                     </div> 

                  <div class="col"> <br> <br>

                        <a href="#" style="color: white; margin-top: 2%; text-decoration: none;">Privacidade e Segurança</a> <br>
                        <a href="#" style="color: white; text-decoration: none;">Apoio</a> <br> <br> <br>

                  </div>

                  <div class="col" style="display: inline-flex;"> <br>

                    <a href="https://wa.me/message/SA2QI5Y2EIPME1"><img src="imagem/whatsapp2.jpg" alt="logo" style="margin-top: 155%; margin-left: 100%;"></a> <br> 
                    <a href="https://www.facebook.com/wilson.bila.79?mibextid=ZbWKwL"> <img src="imagem/facebook2.png" alt="logo" style="margin-top: 170%; margin-left: 180%;"> </a> <br>
                    <a href="wylsonbila@gmail.com"> <img src="imagem/gmail.jpg" alt="logo" style="margin-top: 190%; margin-left: 250%; width: 35px; height: 33px;"> </a> 
                    <a href="#logo"> <input type="button" value="▲" id="botao"> </a>
                     </div>
                </div>
              </div>
            </div>

    <br> <div id="barra2"> 
        <p style="color: rgb(148, 146, 146); margin-left: 400px;"> 2023 BILA Express. Todos os direitos reservados. Created by  </p>	
        <a href="https://www.facebook.com/wilson.bila.79?mibextid=ZbWKwL" style="color: rgb(148, 146, 146); text-decoration: none; margin-left: 4px;"> <strong> Dev Wilson Bila </strong> </a>
    </div>
    
</footer>

</body>
</html>
