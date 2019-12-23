<!-- Tela opcional: se quisermos ver as infos de empresa individualmente -->
@extends('layouts.mainTemplate')

@section('title')
Empresas
@endsection

@section('content')
<div class="pt-3">
<section class="pages-title-bg d-flex justify-content-center align-items-center mt-5">
  <h1>Perfil da Empresa</h1>
</section>
</div>

<div>
  <!-- Conteúdo Central da Página -->
  <section>
    <!-- <div class="row justify-content-center mb-4">
      <div class="col-md-7 col-lg-8 order-2 my-4"> -->
    <div class="container">
      <div class="d-flex justify-content-end mt-3"> 
        <a href="/companies" class="btn btn-primary col-lg-4 p-1"><span class='fa'>&#xf1ad;</span> Voltar para empresas</a>
      </div>
      <div class="card mt-4">
        <div class="row d-flex align-items-center">
          <div class="col-lg-3 pt-2">
            <img class="card-img-top h-90 " src="/img/{{$company->logo}}" alt="Imagem de capa do card">
          </div>
          <h2 class="card-title align-center">{{$company->name}}</h2>
        </div>
          <div class="col-lg-12 p-3">
              <h6 class="card-text"><strong>Descrição:</strong> No Bairro dos Jardins, a um quarteirão da Avenida Paulista, descubra o Tivoli Mofarrej São Paulo Hotel, situado no coração da cidade. Quer esteja numa viagem de negócios ou de lazer, este hotel de cinco estrelas em São Paulo tem tudo para tornar a sua estadia uma experiência inesquecível.</h6>
                <h6 class="card-text">Endereço: <strong>{{$company->address}} {{$company->number}} {{$company->complement}} CEP: {{$company->zip}} </strong></h6>
                <h6 class="card-text">Contato: <strong>{{$company->POC}} </strong></h6>
              <h6 class="card-text">Telefone: <strong>{{$company->phone}}</strong> </h6>
              <h6 class="card-text">E-mail: <strong>{{$company->email}}</strong> </h6>
              <hr>
              <div class="d-flex justify-content-between">
                <div>
                  <a href="#" class="btn btn-primary nowrap m-1">Ver vagas</a>
                  <a href="/courses" class="btn btn-secondary nowrap m-1">Ver cursos</a>
                </div>
                <div class="row">
                  <a href="/companies/{{$company->id}}/edit" class="btn btn-primary nowrap m-1">Editar</a>
                  <form action="/companies/{{$company->id}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token() }}">
                    <input type="submit" class="btn btn-danger" value="Delete">
                  </form>
                </div>
              </div>
              <div class="d-flex justify-content-between">
                
              </div>
        </div>
      </div>
    </div>

@endsection