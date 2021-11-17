<?php 

    include("conexao.php");
    if(isset($_POST['name']) || isset($_POST['textFeedback'])){

      if(strlen($_POST['name']) == 0){
        echo "Preencha seu nome";
      }else if(strlen($_POST['textFeedback']) == 0){
        echo "Preencha seu comentario";
      }else{
        $nome1 = $_POST["name"];
        $text1 = $_POST["textFeedback"];
        $nome =  $mysqli->real_escape_string($nome1);
        $text =  $mysqli->real_escape_string($text1);
  
        $sql_code = "INSERT INTO tb_feedback (nm_remetente, txt_feedback, txt_aprovacao) VALUES ('".$nome."', '".$text."', 'N')";
  
        $res = mysqli_query($mysqli, $sql_code);
        $rows = mysqli_affected_rows($mysqli);

        if($rows == 1){
          echo "Registro gravado";
        }else{
          echo "Falha ao gravar";
        }

      }
    header('location:index.php');

    }

    $consulta = "SELECT * FROM tb_feedback where txt_aprovacao = 'S' ORDER BY cd_feedback DESC";
    $con = $mysqli->query($consulta) or die ($mysqli->error);

    mysqli_close($mysqli);


?>

<!DOCTYPE html>
<html lang="pt-br">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/e9bdd4c643.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./styles/style.css" />
  <!--Icons-->
  <link rel="stylesheet" href="./fonts/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="sortcut icon" href="./photos/logozinha.png" type="image/png" />
  <!--Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
  <title>Totcode</title>
</head>

<body>

  <header id="header">
    <nav class="container">
      <a class="logo" href="#">Tot<span>code</span>.</a>
      <div class="menu">
        <ul class="grid">
          <li><a class="title-nav" href="#home">Início</a></li>
          <li><a class="title-nav" href="#about">Sobre</a></li>
          <li><a class="title-nav" href="#services">Serviços</a></li>
          <li><a class="title-nav" href="#testimonials">Depoimentos</a></li>
          <li><a class="title-nav" href="#contact">Contato</a></li>
          <i id="lightbtn" class="ri-contrast-2-line dark"></i>
          <i id="darkbtn" class="ri-contrast-2-fill dark"></i>
          <li><a class="title-nav" href="/TCM/en.php">EN</a></li>
        </ul>
      </div>
      <div class="toggle icon-menu"></div>
      <div class="toggle icon-close"></div>
    </nav>
  </header>

  <main>
    <section class="section" id="home">
      <div class="container grid">
        <div class="image">
          <img
            src="https://media.istockphoto.com/photos/put-more-in-get-more-out-picture-id1291318636?k=20&m=1291318636&s=612x612&w=0&h=9W9vtNNYd8LHNeeM5_z8MUYX_HEKmbWIt6yU7wPoxrA="
            alt="Imagem de exposição" />
        </div>
        <div class="text">
          <h2 class="title">Aqui o nosso conhecimento vira sua solução!</h2>
          <p>
          Uma empresa desenvolvedora de sistemas que ja está no mercado a mais de duas décadas, trazendo credibilidade e empenho em nosso trabalho.
          </p>
          <a href="#about" class="button">Conheça mais</a>
        </div>
      </div>
    </section>

                                  <div class="divider-1"></div>

    <section class="section" id="about">
      <div class="container grid">
        <div class="image">
          <img
            src="https://media.istockphoto.com/photos/creative-business-team-laughing-together-picture-id670083108?k=20&m=670083108&s=612x612&w=0&h=ijTkgul22qRr1ETyiJC0rcnOepj3NxsAN9EOv7rrzXo="
            alt="Mulher com outras mulheres">
        </div>

        <div class="text">
          <h2 class="title">Sobre nós</h2>
          <p>A Totcode é uma empresa relacionada principalmente aos avanços tecnológicos e trabalha com dedicação e comprometimento
            . Surgiu a partir de uma equipe em maio de 2000, em São Paulo. A equipe é constituída por
                 7 membros, formados pela FATEC-SP. </p>
          </br>
          <p>Há 21 anos a nossa empresa vem trazendo como principal responsabilidade a melhor
            solução para os nossos clientes, a partir dos conhecimentos que foram se concretizando ao longo da nossa carreira dentro
             do mercado.</p>

        </div>
      </div>
    </section>

                                  <div class="divider-2"></div>

    <section class="section" id="services">
      <div class="container grid">
        <header>
          <h2 class="title">Serviços</h2>
          <p class="subtitle">Com mais de duas décadas no mercado, a <strong>Totcode</strong> já conquistou clientes de inúmeros países
            com seus sistemas de alta qualidade e performace!</p>
        </header>
        <div class="cards grid">
          <div class="card">
             <i class="fas fa-desktop"></i>
            <h3 class="title">Sistemas</h3>
            <p>Desenvolvimento de Software Sob Medida
                e muito mais para gerar valor 
                ao seu negócio. Totalmente completo para se utilizar!​</p>
          </div>
          <div class="card">
          <i class="fab fa-internet-explorer"></i>
            <h3 class="title">Criação de sites</h3>
            <p>Assim como cada cliente é único, nossos produtos também o são. 
                Criamos o site exclusivamente para o seu projeto.</p>
          </div>
          <div class="card">
          <i class="fas fa-crop-alt"></i>
            <h3 class="title">Identidade visual</h3>
            <p>A identidade visual se tornou algo importante para as empresas, por isso criamos identidades atrativas e exclusivas!
            </p>
          </div>
        </div>
      </div>
    </section>

                                  <div class="divider-1"></div>

    <section class="section" id="testimonials">
      <div class="container">
        <header>
          <h2 class="title">Depoimentos de
            quem já passou
            por aqui</h2>
        </header>
        <div class="testimonials swiper-container">

          <div class="swiper-wrapper">

          <?php 
          while($data = $con->fetch_array()){  ?>
            <div class="testimonial swiper-slide">
              <blockquote>
                <p>
                  <span>&ldquo;</span>
                  <?php echo $data["txt_feedback"]; ?>
                </p>
                <cite>
                <?php echo $data["nm_remetente"]; ?>
                </cite>
              </blockquote>
            </div>
            <?php 
          } ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

                                  <div class="divider-2"></div>

    <section class="section" id="contact">
      <div class="container grid">

        <div class="text">
          <h2 class="title">Entre em contato com a gente!</h2>
          <p>Entre em contato com a Totcode, estamos procurando desenvolvedores para crescer conosco.</p>
          <a href="/TCM/contact.php" class="button" target="_blank"><i class="fas fa-briefcase"></i>Trabalhe conosco!</a>
        </div>

        <div class="links">
          <ul class="grid">
            <li><i class="icon-phone"></i> 11 2960-1897</li>
            <li><i class="icon-map-pin"></i> R. Guaipá, 678 - Vila Leopoldina, São Paulo - SP, 05089-000</li>
            <li><i class="icon-mail"></i> totcode2000@gmail.com</li>
          </ul>
        </div>
      </div>
    </section>

                                  <div class="divider-1"></div>

    <div class="section" id="feedback">
      <div class="container grid">
          <div class="text-feedback">
          <h2 class="title">Deixe seu Feedback!</h2>
          <p class="subtitle">Sua avaliação é de extrema importância para nossa empresa. Deixe um comentário avaliando os nossos serviços!</p>
          </div>
        <form action="" method="POST">
                <input name="name" type="text" placeholder="Digite seu nome..." required/>
            <div class="">
                <input name="textFeedback" type="text" placeholder="Seu Feedback..." required/>
                <button class="button" type="submit">Enviar</button>
            </div>
        </form>
      </div>
    </div>
  </main>

  <footer class="section">
    <div class="container grid">
      <div class="brand">
    <a class="logo logo-alt" href="#home">Tot<span>code</span>.</a>
    <p>©2021 Totcode.</p>
    <p>Todos os direitos reservados.</p>
      </div>

      <div class="social grid">
          <a href="https://www.facebook.com/Totcode2000/" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/totcode/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/tot-code-041b47213/" target="_blank"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <a href="#home" class="back-to-top"><i class="icon-arrow-up"></i></a>


  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="./src/main.js"></script>
</body>
</html>
