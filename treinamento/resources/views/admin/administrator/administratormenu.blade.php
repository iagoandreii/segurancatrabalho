@extends('templates.menu')

@section('menu')
    <li class="nav-item active">
        <a class="nav-link text-white" href="/home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/addemployee">Cadastro de funcionário</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/employeedevelopment">Desempenho do funcionário</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/addtraining">Adcionar treinamentos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/addtest">Adcionar testes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="#">Sair</a>
    </li>
@endsection