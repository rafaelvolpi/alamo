<? include "functions.php"; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Álamo</title>
    <link rel="shortcut icon" href="./favicon.ico" />
    <meta name="description" content="Na Álamo, você não tem preocupações: é tudo sem burocracia">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/yae3zah.css" async>
    <link rel="stylesheet" href="style.min.css">
    <link rel="stylesheet" media="(min-width: 768px)" href="style-m.min.css">
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <section id="banner">
      <div id="banner-bg"></div>
      <div class="container">
        <div class="row">
          <div class="baloon">
            <div class="logo"><img src="./assets/img/alamo.png"></div>
            <h1>Na Álamo, você não <br>tem preocupações: <span>é tudo sem<br> burocracia</span></h1>
            <hr>
            <div class="d-flex justify-content-center justify-content-md-start"><? echo cta("PROTEJA AGORA SEU VEÍCULO"); ?></div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="video">
      <div class="container">
      <div class="row">
        <div class="video col-md-6">
          <button type="button" class="btn btn-video" data-bs-toggle="modal" data-bs-target="#videoModal">
            <img src="./assets/img/video.png" class="img-fluid">
          </button>
        </div>
        <div class="col-md-6 pt-md-3 ps-md-5">
          <p>Agora, proteger <br>o seu veículo <br>ficou <span>muito <br>mais fácil.</span></p>
          <div class="d-flex justify-content-center justify-content-md-start"><? echo cta("QUERO SER ÁLAMO"); ?></div>
        </div>
      </div>
      </div>
    </section>

    <section id="papelada">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <p class="txt">Aqui, não importa<br> a sua idade, onde<br> você mora nem onde<br> o seu veículo circula.</p>
            <div class="d-flex d-none d-md-block justify-content-center"><? echo cta("FAÇA JÁ SEU ORÇAMENTO"); ?></div>
          </div>
          <div class="col-md-6">
            <div>
              <figure>
                <img src="./assets/img/papelada.png" alt="Na Álamo, não tem papelada." style="width:100%">
                <figcaption><span>Na Álamo,</span> não tem papelada.</figcaption>
              </figure>
            </div>          
            <div class="d-flex d-md-none justify-content-center"><? echo cta("FAÇA JÁ SEU ORÇAMENTO"); ?></div>
          </div>
        </div>
      </div>
    </section>

    <section id="servicos">
      <div class="container">
        <div class="">
          <h2 class="col-md-6">Tenha acesso a serviços de qualidade sem pagar mais caro.</h2>
          <p>Conheça alguns benefícios dos planos da Álamo:</p>
          <ul>
            <div></div>
            <li class="a">
              <p>assistência 24h</p>
              <img src="./assets/img/ico-24h.svg" />
            </li>
            <li class="b">
              <p>proteção contra incêndio</p>
              <img src="./assets/img/ico-incendio.svg" /></li>
            <li class="c">
              <p>colisão</p>
              <img src="./assets/img/ico-colisao.svg" /></li>
            <li class="d">
              <p>reboque</p>
              <img src="./assets/img/ico-reboque.svg" /></li>
            <li class="e">
              <p>roubo e furto</p>
              <img src="./assets/img/ico-roubo.svg" /></li>
          </ul>
          <div class="d-flex justify-content-center">
          <? echo cta("DESCUBRA QUAL É O MELHOR PLANO PARA VOCÊ"); ?>
          </div>
        </div>
      </div>
    </section>


    <section id="tranquilidade">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div id="dummy"></div>
              <p>Com a Álamo,<br>
                você tem<br>
                <b>tranquilidade<br>
                na sua rotina.</b></p>
            </div>
          </div>
          <div class="col-md-6">
            <div>
              <h3>De qual proteção<br>você precisa?</h3>
              <ul>
                <li>para você</li>
                <li>para sua empresa</li>
                <li>para carros de aplicativo<div class="d-none d-md-block"></div> de transporte</li>
              </ul>
              <div class="d-flex justify-content-center justify-content-md-start"><? echo cta("CONHEÇA NOSSOS PLANOS"); ?></div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="clube">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Um clube de<br> vantagens</h2>
            <p>com descontos<br> exclusivos</p>
            <div class="d-none d-md-flex"><? echo cta("QUERO MAIS VANTAGENS!"); ?></div>
          </div>
          <div class="col-md-6">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./assets/img/logo-carrefour.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="./assets/img/logo-cinemark.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="./assets/img/logo-magalu.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="./assets/img/logo-netshoes.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="./assets/img/logo-drogasil.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="./assets/img/logo-extra.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="./assets/img/logo-saraiva.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="./assets/img/logo-burguerking.png" class="d-block w-100">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#EB6013" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                  </svg>
                </span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#EB6013" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                  </svg>
                </span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="d-flex d-md-none justify-content-center"><? echo cta("QUERO MAIS VANTAGENS!"); ?></div>
      </div>
    </section>

    <section id="diferenca">
      <div class="container">
        <div class="row">
        <h2>Afinal, qual é a <b>diferença</b> entre<br> proteção veicular e seguro?</h2>
        <div class="col-md-6">
        <div class="box a">
          <p>Proteção veicular</p>
          <ul>
            <li>Preço mais acessível</li>
            <li>Rápido e sem burocracia</li>
            <li>Não realiza análise de perfil</li>
            <li>Contratação mensal</li>
            <li>Associação faz rateio das despesas</li>
            <li>Cancele quando quiser</li>
          </ul>
        </div>
        </div>
        <div class="col-md-6">
        <div class="box b">
          <p>Seguro</p>
          <ul>
            <li>Preço fixo e mais alto</li>
            <li>Visa o lucro da seguradora</li>
            <li>Restrições nos seguros</li>
            <li>Seu perfil é avaliado</li>
            <li>Contrato por meio de apólice</li>
            <li>Pagamento de multa em caso de rescisão</li>
          </ul>
        </div>
        </div>
        <div class="d-flex justify-content-center"><? echo cta("FAÇA UMA SIMULAÇÃO"); ?></div>
      </div>
    </section>


    <section id="contato">
      <div class="container">
      <div class="row">
      <div class="col-md-8 offset-md-2">
        <h2>Quer ser Álamo?</h2>
        <p>Preencha o formulário abaixo <br>e entraremos em contato.</p>
        <div class="mt-5 mb-5"><div role="main" id="formulario-one-page-13dafb44692157d61dd2"></div><script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script><script type="text/javascript"> new RDStationForms('formulario-one-page-13dafb44692157d61dd2', 'null').createForm();</script></div>
      </div>
    </section>


    <section id="footer">Álamo 2021. Todos os direitos reservados</section>


    <!-- Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-fullscreen-xxl-down modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-0">
          <video width="100%" height="auto" id="videoDepoimento" controls>
            <source src="./assets/img/depoimento.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          </div>
        </div>
      </div>
    </div>

<script>
  var myModalEl = document.getElementById('videoModal');
  let videoElem = document.getElementById("videoDepoimento");

  myModalEl.addEventListener('hidden.bs.modal', function (event) {
    videoElem.pause();
  });

  myModalEl.addEventListener('show.bs.modal', function (event) {
    videoElem.play();
  });
</script>

  </body>
</html>