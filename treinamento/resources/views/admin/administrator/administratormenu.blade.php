@extends('templates.menu')

@section('menu')
    <li class="nav-item active">
        <a class="nav-link text-white" href="/home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/addfuncionario">Cadastro de funcionário</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/desempenhofuncionario">Desempenho do funcionário</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/addtreinamentos">Adcionar treinamentos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/addteste">Adcionar testes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="#">Sair</a>
    </li>
@endsection