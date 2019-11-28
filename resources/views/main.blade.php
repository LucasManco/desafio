<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/213cea8838.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css\style.css">

  <title>VITORIAWAGEN - TUDO NOVO VOLKSWAGEN</title>
</head>

<body>

  <header>
    <div class="d-flex w-100 banner-top">
      <img class="banner-top" src="images/bg.png" alt="Não compre casso antes de conferir as ofertas imperdíveis na Vitoriawagen">
    </div>
    <div class="d-flex w-100 color-dark-blue">
      <div class="btn-group mx-auto">
        <button class="btn btn-primary color-dark-blue" type="button" name="button" onclick="switchDiv('box-car', 'polo')">Novo Polo</button>
        <button class="btn btn-primary color-dark-blue" type="button" name="button" onclick="switchDiv('box-car', 'up')">Up!</button>
      </div>
    </div>
  </header>

  <body>
    <div class="d-flex flex-row content">
      <div class="box-car" id="polo">
        <div class="d-flex flex-column">
          <div class="d-flex flex-row mx-auto mt-4 size-325">
            <div class="box-info">
              <p><strong>NOVO POLO</strong></p>
              <p>1.0 MPI</p>
            </div>
            <div class="box-info p-0">
              <hr width="1" size="100">
            </div>
            <div class="box-info">
              <p>
                A PARTIR DE <strong>R$ 49.990,00</strong>
              </p>
              <p>
                + TAXA <strong>0%</strong>
              </p>
            </div>
          </div>
          <div>
            <img class="w-100" src="images\novo-polo-vitoriawagen-2.png" alt="">
          </div>
        </div>
      </div>
      <div class="box-car" id="up">
        <div class="d-flex flex-column">
          <div class="d-flex flex-row mx-auto mt-4 size-325">
            <div class="box-info">
              <p><strong>UP!</strong></p>
              <p>1.0 MPI</p>
            </div>
            <div class="box-info p-0">
              <hr width="1" size="100">
            </div>
            <div class="box-info">
              <p>
                A PARTIR DE <strong>R$ 56.990,00</strong>
              </p>
              <p>
                + TAXA <strong>0%</strong>
              </p>
            </div>
        </div>
        <div>
          <img class="w-100" src="images\take-up-vermelho.png" alt="">
        </div>
      </div>
      </div>
      <div class="">
        <div class="form-cta mt-5">

          <h1 class="text-center">

              SAIA NA FRENTE E GARANTA SEU VOLKSWAGEN

          </h1>
          <p class="text-center">Escolha o modelo que você deseja e receba ofertas imperdiveis em primeira mão.</p>
        </div>
        @include('form')
      </div>
    </div>
    <div class="color-dark-blue ">
      <p class="text-white w-50 mx-auto font-small py-3">
        Imagens Ilustrativas. Novo Polo 1.0 MPI - preto - a partir de R$ 49.990,00 - condição de taxa de 0% válida exclusivamente para modelos 1.0 MPI e 1.6 MSI com entrada de 90% e saldo em 12 meses. Promoção válida até 28/02/2018 ou
        enquanto durar o estoque.
      </p>
    </div>
  </body>
  <footer>
    <div class="d-flex">
      <img src="images\rodape.png" class="mx-auto" alt="">
    </div>
    <div class="d-flex flex-column w-100 color-dark-blue">
      <div class="btn-group mx-auto">
        <button class="btn btn-primary color-dark-blue" type="button" name="button" onclick="switchDiv('city-adress', 'vitoria')">Vitória</button>
        <button class="btn btn-primary color-dark-blue" type="button" name="button" onclick="switchDiv('city-adress', 'serra')">Serra</button>
        <button class="btn btn-primary color-dark-blue" type="button" name="button" onclick="switchDiv('city-adress', 'guarapari')">Guarapari</button>
      </div>

      <div class="mx-auto mt-2">
        <div id="vitoria" class="city-adress">
          <p class="text-white text-center">Av.Vitória, 1047 - Romão - Virória - Cep 29041-405</p>
          <p class="text-white text-center">Email: crm.vitoriawagen@grupolider.com.br</p>
            <p class="text-white text-center">Tel: (27) 3331-8100</p>
        </div>
        <div id="serra" class="city-adress">
          <p class="text-white text-center">BR-101, 5030 - Planalto de Carapina - CEP: 29162-703 - Serra - ES</p>
          <p class="text-white text-center">Email: crm.vitoriawagen@grupolider.com.br</p>
            <p class="text-white text-center">Tel: (27) 3298-3400</p>
        </div>
        <div id="guarapari" class="city-adress">
          <p class="text-white text-center">Av.Jones Dos Santos Neves, S/N - Muquiçaba - CEP: 29214-005 - Guarapari - ES</p>
          <p class="text-white text-center">Email: crm.vitoriawagen@grupolider.com.br</p>
            <p class="text-white text-center">Tel: (27) 3361-8400</p>
        </div>
      </div>
      <div class="d-flex flex-row mx-auto ">
        <a href="https://www.facebook.com/Vitoriawagen" class="btn btn-social-icon btn-facebook">
          <i class="fab fa-facebook social-button"></i>
        </a>
        <a href="https://twitter.com/vitoriawagen" class="btn btn-social-icon btn-twitter">
          <i class="fab fa-twitter social-button"></i>
        </a>
        <a href="https://www.youtube.com/user/Vitoriawagen" class="btn btn-social-icon btn-youtube">
          <i class="fab fa-youtube social-button"></i>
        </a>
      </div>
    </div>
  </footer>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/js/fetchCall.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <script src="/js/form-mask.js"></script>
  <script src="/js/switchDiv.js"></script>


  <script>
    submitPostCall('api/form', 'form')
  </script>

</body>

</html>
