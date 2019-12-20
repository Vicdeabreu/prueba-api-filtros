@extends('layouts.mainTemplate')

@section('title')
Cadastrar Empresa
@endsection

@section('content')

<!-- TODO: depois montarmos a base de dados temos que tirar essa parte -->
<?php
  $countries = ["Afeganistão", "África do Sul", "Akrotiri", "Albânia", "Alemanha", "Andorra", "Angola", "Anguila", "Antárctida", "Antígua e Barbuda", "Arábia Saudita", "Arctic Ocean", "Argélia", "Argentina", "Arménia", "Aruba", "Ashmore and Cartier Islands", "Atlantic Ocean", "Austrália", "Áustria", "Azerbaijão", "Baamas", "Bangladeche", "Barbados", "Barém", "Bélgica", "Belize", "Benim", "Bermudas", "Bielorrússia", "Birmânia", "Bolívia", "Bósnia e Herzegovina", "Botsuana", "Brasil", "Brunei", "Bulgária", "Burquina Faso", "Burúndi", "Butão", "Cabo Verde", "Camarões", "Camboja", "Canadá", "Catar", "Cazaquistão", "Chade", "Chile", "China", "Chipre", "Clipperton Island", "Colômbia", "Comores", "Congo-Brazzaville", "Congo-Kinshasa", "Coral Sea Islands", "Coreia do Norte", "Coreia do Sul", "Costa do Marfim", "Costa Rica", "Croácia", "Cuba", "Curacao", "Dhekelia", "Dinamarca", "Domínica", "Egipto", "Emiratos Árabes Unidos", "Equador", "Eritreia", "Eslováquia", "Eslovénia", "Espanha", "Estados Unidos", "Estónia", "Etiópia", "Faroé", "Fiji", "Filipinas", "Finlândia", "França", "Gabão", "Gâmbia", "Gana", "Gaza Strip", "Geórgia", "Geórgia do Sul e Sandwich do Sul", "Gibraltar", "Granada", "Grécia", "Gronelândia", "Guame", "Guatemala", "Guernsey", "Guiana", "Guiné", "Guiné Equatorial", "Guiné-Bissau", "Haiti", "Honduras", "Hong Kong", "Hungria", "Iémen", "Ilha Bouvet", "Ilha do Natal", "Ilha Norfolk", "Ilhas Caimão", "Ilhas Cook", "Ilhas dos Cocos", "Ilhas Falkland", "Ilhas Heard e McDonald", "Ilhas Marshall", "Ilhas Salomão", "Ilhas Turcas e Caicos", "Ilhas Virgens Americanas", "Ilhas Virgens Britânicas", "Índia", "Indian Ocean", "Indonésia", "Irão", "Iraque", "Irlanda", "Islândia", "Israel", "Itália", "Jamaica", "Jan Mayen", "Japão", "Jersey", "Jibuti", "Jordânia", "Kosovo", "Kuwait", "Laos", "Lesoto", "Letónia", "Líbano", "Libéria", "Líbia", "Listenstaine", "Lituânia", "Luxemburgo", "Macau", "Macedónia", "Madagáscar", "Malásia", "Malávi", "Maldivas", "Mali", "Malta", "Man, Isle of", "Marianas do Norte", "Marrocos", "Maurícia", "Mauritânia", "México", "Micronésia", "Moçambique", "Moldávia", "Mónaco", "Mongólia", "Monserrate", "Montenegro", "Mundo", "Namíbia", "Nauru", "Navassa Island", "Nepal", "Nicarágua", "Níger", "Nigéria", "Niue", "Noruega", "Nova Caledónia", "Nova Zelândia", "Omã", "Pacific Ocean", "Países Baixos", "Palau", "Panamá", "Papua-Nova Guiné", "Paquistão", "Paracel Islands", "Paraguai", "Peru", "Pitcairn", "Polinésia Francesa", "Polónia", "Porto Rico", "Portugal", "Quénia", "Quirguizistão", "Quiribáti", "Reino Unido", "República Centro-Africana", "República Checa", "República Dominicana", "Roménia", "Ruanda", "Rússia", "Salvador", "Samoa", "Samoa Americana", "Santa Helena", "Santa Lúcia", "São Bartolomeu", "São Cristóvão e Neves", "São Marinho", "São Martinho", "São Pedro e Miquelon", "São Tomé e Príncipe", "São Vicente e Granadinas", "Sara Ocidental", "Seicheles", "Senegal", "Serra Leoa", "Sérvia", "Singapura", "Sint Maarten", "Síria", "Somália", "Southern Ocean", "Spratly Islands", "Sri Lanca", "Suazilândia", "Sudão", "Sudão do Sul", "Suécia", "Suíça", "Suriname", "Svalbard e Jan Mayen", "Tailândia", "Taiwan", "Tajiquistão", "Tanzânia", "Território Britânico do Oceano Índico", "Territórios Austrais Franceses", "Timor Leste", "Togo", "Tokelau", "Tonga", "Trindade e Tobago", "Tunísia", "Turquemenistão", "Turquia", "Tuvalu", "Ucrânia", "Uganda", "União Europeia", "Uruguai", "Usbequistão", "Vanuatu", "Vaticano", "Venezuela", "Vietname", "Wake Island", "Wallis e Futuna", "West Bank", "Zâmbia", "Zimbabué"]
?>

<!-- Formulário -->
<section class="d-flex justify-content-center align-items-center p-4 my-5">
  <form action="/companies" method="post" class="register-company-main card p-5 mt-5 col-lg-5" enctype="multipart/form-data">
    @csrf
    <div class="form-group text-center mt-3">
      <h2>Cadastrar Nova Empresa</h2>
    </div>

    <div class="form-group">
      <label for="companyName">Nome da empresa</label>
      <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Nome da empresa" required>
    </div>
    <div class="from-group">
      <label for="companyLogo">Logo da Empresa</label>
      <input class="form-control" type="file" name="companyLogo" id="companyLogo">
    </div>
    <div class="form-group">
      <label for="personContact"><strong>Pessoa de contato</strong></label>
      <input type="text" class="form-control" name="companyPOC" id="personContact" placeholder="Nome completo do contato" required>
    </div>
    <div class="form-group">
      <label for="companyPhone">Telefone</label>
      <input type="tel" class="form-control" name="companyPhone" id="companyPhone" placeholder="11 12345-1234" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
      <small>Formato: 11 12345-1234</small>
    </div>
    <div class="form-group">
      <label for="companyEmail">E-mail</label>
      <input type="email" class="form-control" name="companyEmail" id="companyEmail" placeholder="E-mail" required>
    </div>
    <div class="row">
      <div class="form-group col-8 p-0">
        <label for="companyAddress">Endereço</label>
        <input type="text" class="form-control" name="companyAddress" id="companyAddress" placeholder="Endereço" required>
      </div>
      <div class="form-group col-4 p-0 pl-2">
        <label for="companyAddressNo">Número</label>
        <input type="text" class="form-control" name="companyAddressNo" id="companyAddressNo" placeholder="Número" required>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-6 p-0">
        <label for="companyAddressComp">Complemento</label>
        <input type="text" class="form-control" name="companyAddressComp" id="companyAddressComp" placeholder="Complemento" required>
      </div>
      <div class="form-group col-6 p-0 pl-2">
        <label for="companyZip">CEP</label>
        <input type="text" class="form-control" name="companyZip" id="companyZip" placeholder="CEP" required>
      </div>
    </div>
    <label for="companyCountry">País</label>
    <div class="form-group">
      <select class="col-lg-12" name="companyCountry" id="companyCountry" required >
        <option value="{{$country->id}}" selected disabled>{{$country->name}}</option>
          @foreach ($countries as $country)
            <option value='{{$country->id}}'>{{$country->name}}</option>;
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="city">Cidade</label>
      <input type="text" class="form-control" name="companyCity" id="city" placeholder="Cidade" required>
    </div>
    <div class="form-group">
      <label for="state">Estado</label>
      <input type="text" class="form-control" name="companyState" id="state" placeholder="Estado" required>
    </div>
    <button type="submit" class="btn btn-primary align-self-center mt-3">Salvar</button>

  </form>
</section>

<div class="row">
      <div class="col-md-12">
        @if(isset($result))
          @if($result)
            <h1>Deu certo campeao!</h1>
          @else
            <h1>Nao deu certo seu cadastro, e foi sua culpa!</h1>
          @endif
        @endif
      </div>

</div>

@endsection