<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Dark souls<?php if(isset($_GET['op'])){echo $_GET['op'];} ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</head>

<body text="align: center">
 <?php if(isset($_GET['op'])){ ?>


  <?php if($_GET['op'] == 1) { ?>

    <!--Pag 1-->
    <!--Pag 1-->
    <!--Pag 1-->
    <!--Pag 1-->

    <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="Pw2.html">
            <img src="img/4.png" width="100" height="50" class="d-inline-block align-top" alt="">
            ⠀
          </a>
        </nav>

      </div>
    </div>
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="Index.php">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Saga
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="index.php?op=1">Enredo</a>
                  <a class="dropdown-item" href="index.php?op=2">Jogabilidade</a>
                  <a class="dropdown-item" href="index.php?op=3">Onde Comprar</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col">
        <br>
        <img src="img\lobo.jpg" class="d-block w-100">
        <br>
        <h3>
          Dark souls
        </h3>
        <h5>
          Enredo
        </h5>
        <br>
        <p style="text-align: justify;">
          Dark Souls se passa primariamente no reino fictício de Lordran, onde os jogadores assumem o papel de um
          personagem denominado "Chosen Undead" que, segundo lendas, seria responsável pela quebra de uma maldição que
          torna incapazes de morrer aqueles que são afligidos por uma misteriosa marca negra. O jogo é inspirado
          fortemente pela temática medieval, com a presença de deuses e seres fantásticos, inseridos em um mundo
          decadente e punitivo. A estrutura de apresentação da história é subjetiva, dando-se basicamente através da
          descrição de itens ou em interações com NPCs, possibilitando margem para diversas interpretações acerca de
          toda a mitologia presente no jogo.
        </p>
      </div>

      <div class="col">

        <br>
      

            
      <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Dark souls 
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
            data-parent="#accordionExample">
            <div class="card-body">
              Um jogo do Gênero Ação/RPG seu preco varia de 35.95 USD a 39.95 USD e sua desenvolvedora foi a empresas
                conhecidas como From Software (Japão) e Namco Bandai Games (Internacional)
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    curiosidades
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
            data-parent="#accordionExample">
            <div class="card-body">
                dark souls foi considerado um dos jogos mais dificeis do mundo.
            </div>
        </div>
    </div>
             

    </div>
    <br>
    <br>
    
    <footer class="bg-light text-center">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-dark" href="Index.php">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    </div>         
            
            
                <?php } elseif($_GET['op'] == 2){ ?>

    <!--Pag 2-->
    <!--Pag 2-->
    <!--Pag 2-->
    <!--Pag 2-->

                    <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="Pw2.html">
            <img src="img/4.png" width="100" height="50" class="d-inline-block align-top" alt="">
            
          </a>
        </nav>

      </div>
    </div>
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="Index.php">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Saga
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="index.php?op=1">Enredo</a>
                  <a class="dropdown-item" href="index.php?op=2">Jogabilidade</a>
                  <a class="dropdown-item" href="index.php?op=3">Onde Comprar</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>


    <br>
    <div class="row">
      <div class="col">
        <br>
        <img src="img\img5.jpg" class="d-block w-100">
        <br>
        <br>
        <h5>
          Jogabilidade
        </h5>
        <br>
        <p style="text-align: justify;">
          O sistema de jogabilidade apresenta-se em terceira pessoa e com foco em combates estratégicos e dinâmicos,
          inseridos em uma íngreme curva de dificuldade, característica mais marcante da série. O sistema de progressão
          baseia-se na tradicional progressão de atributos, que variam desde força à inteligência, estamina e fé, dentre
          outros. Em sua jornada, o jogador encontrará ambientes diversos, como masmorras, fortalezas, cemitérios,
          lugares fantásticos, complementados por um game design circular, com a interconexão das mais diversas áreas em
          pontos específicos da narrativa. O sistema online preza pela interação entre jogadores, seja através de dicas
          in-game sobre os desafios existentes, combate entre jogadores e cooperação para completar determinados pontos
          do game.
        </p>
      </div>
      <div class="col">
        <br>



      <div class="card">
          <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      PvP
                  </button>
              </h5>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingThree"
              data-parent="#accordionExample">
              <div class="card-body">
                Dark Souls não é um jogo orientado para PVP. Lidar com isso. A série Souls em geral nunca foi. O PvP não
                era para ser justo. Não era para ser equilibrado. Ele nunca tentou servir para os duelos de honra "1v1
                bow-before-you fight". Nunca tentou imitar e-sports competitivos.
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      jogo cooperativo
                  </button>
              </h5>
          </div>
          <div id="collapseEight" class="collapse" aria-labelledby="headingThree"
              data-parent="#accordionExample">
              <div class="card-body">
                o jogo pode ser jogado com seus amigos, ou npcs. quanto mais npcs entram no seu mundo mais dificil o jogo ficará.
              </div>
          </div>
      </div>
      <br>
    
  </div>
</div>

<div class="row">
<div class="col">
      
    <br>
    <br>
    <footer class="bg-light text-center">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-dark" href="Index.php">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
</div>
</div>
  </div>
                       
            
<?php }else{?>

    <!--Pag 3-->
    <!--Pag 3-->
    <!--Pag 3-->
    <!--Pag 3-->
              
    <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="Pw2.html">
            <img src="img/4.png" width="100" height="50" class="d-inline-block align-top" alt="">
            
          </a>
        </nav>

      </div>
    </div>
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="Index.php">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Saga
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="index.php?op=1">Enredo</a>
                  <a class="dropdown-item" href="index.php?op=2">Jogabilidade</a>
                  <a class="dropdown-item" href="index.php?op=3">Onde Comprar</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col">
        <br>
        <img src="img\Ocomprar.jpg" class="d-block w-100">
        <br>
        <h3>
          Dark souls
        </h3>

        <br>
        <p style="text-align: justify;">

        <h5>
          Requisitos mínimos
        </h5>
        Sistema operacional: Windows 7 SP1 64bit, Windows 8.1 64bit Windows 10 64bit
        Processador: AMD A8 3870 3.6 Ghz ou Intel Core i3 2100 3.1Ghz
        Memória RAM: 8 GB
        Placa de vídeo: NVIDIA GeForce GTX 465 / ATI Radeon HD 6870
        DirectX: Versão 11
        Espaço no HD: 50 GB
        Configurações recomendadas.
        <br><br>
        <h5>
          Requisitos recomendados
        </h5>
        Sistema operacional: Windows 7 SP1 64bit, Windows 8.1 64bit Windows 10 64bit
        Processador: AMD FX 8150 3.6 GHz ou Intel Core™ i7 2600 3.4 GHz
        Memória RAM: 8 GB
        Placa de vídeo: NVIDIA GeForce GTX 750, ATI Radeon HD 7850
        DirectX: Versão 11
        Espaço no HD: 50 GB.
        </p>
      </div>

      <div class="col">

        <br>
                   
      <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Dark souls 
                </button>
            </h5>
        </div>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingThree"
            data-parent="#accordionExample">
            <div class="card-body">
              Nesse site falaremos sobre os requisitos minimos para rodar dark souls.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                   Onde Comprar
                </button>
            </h5>
        </div>
        <div id="collapseEight" class="collapse" aria-labelledby="headingThree"
            data-parent="#accordionExample">
            <div class="card-body">
              <a class="navbar-brand" href="https://store.steampowered.com/app/211420/DARK_SOULS_Prepare_To_Die_Edition/?l=portuguese">⠀⠀⠀Link</a>
            </div>
        </div>
    </div>
        
        </div>
      </div>
    </div>
    <br>
    <br>
    <footer class="bg-light text-center">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-dark" href="Index.php">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
</div>

<?php } ?>
        
        
        
<?php }else{ ?>


    <!--Pag principal-->
    <!--Pag principal-->
    <!--Pag principal-->
    <!--Pag principal-->
        
            <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="Pw2.html">
            <img src="img/4.png" width="100" height="50" class="d-inline-block align-top" alt="">
            
          </a>
        </nav>

      </div>
    </div>
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="Index.php">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Saga
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="index.php?op=1">Enredo</a>
                  <a class="dropdown-item" href="index.php?op=2">Jogabilidade</a>
                  <a class="dropdown-item" href="index.php?op=3">Onde Comprar</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    

    <div class="row">
      <div class="col">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/1.jpg  " width="30" height="500" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/2.png  " width="30" height="500" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/3.jpg  " width="30" height="500" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  

  <br>




  <br>

  
    <div class="row">
      <div class="col">

        <figure class="figure">
          <img src="img\img.jpg" width="3000" height="500" class="figure-img img-fluid rounded"
            alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption">Dark souls 1</figcaption>
        </figure>

      </div>
      <div class="col">

        <figure class="figure">
          <img src="img/ds2-19.jpg" width="3000" height="500" class="figure-img img-fluid rounded"
            alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption">Dark souls 2</figcaption>
        </figure>

      </div>
      <div class="col">

        <figure class="figure">
          <img src="img/img2.jpg" width="3000" height="500" class="figure-img img-fluid rounded"
            alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption">Dark souls 3</figcaption>
        </figure>

      </div>
    </div>
 
  <footer class="bg-light text-center">

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="Index.php">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</div>
 </div>

        <?php } ?>

    </body>
</html>