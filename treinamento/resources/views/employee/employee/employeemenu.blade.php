@extends('templates.menu')

@section('menu')
  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado" style="margin-left: 100px;font-size: 13pt;">
    <li class="nav-item active">
        <a class="nav-link text-white" href="/home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/informacao">Informações</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/desempenho">Desempenho</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/treinamento">Treinamentos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/teste">Testes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="#">Sair</a>
    </li>
    </div>
@endsection