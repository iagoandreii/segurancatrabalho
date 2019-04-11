@extends('templates.menu')
@section('menu')
    <li class="nav-item active">
        <a class="nav-link text-white" href="/home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/funcionario">Cadastro de funcionário</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/desempenho_funcionario">Desempenho do funcionário</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/treinamento">Adcionar treinamentos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/teste">Adcionar testes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="#">Sair</a>
    </li>
@endsection