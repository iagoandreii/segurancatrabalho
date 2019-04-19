@extends('templates.menu')
@extends('templates.struct')

<div style="margin-top:-10px;">Lazal</div>
@section('css')
  <link rel="stylesheet" type="text/css" href="css/menu.css">
@endsection


@section('title')
    Home
@endsection

<nav class="na navbar navbar-expand-lg navbar-light bg-success">
  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <span class="nav-item active text-white display-4">Lazal</span>
    </ul>
  </div>
</nav>

<br><br><br><br>
<center>

    <!--Administrador-->
<nav class="na2 navbar navbar-expand-lg navbar-light text-center bg-success">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span></button>

	<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
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
    </div>
     <!--Funcionario-->
    <!--    

 	<div class="collapse navbar-collapse" id="conteudoNavbarSuportado" style="margin-left: 130px;font-size: 12pt;">
    	<li class="nav-item active">
        	<a class="nav-link text-white" href="/home">Home</a>
    	</li>
    	<li class="nav-item">
        	<a class="nav-link text-white" href="/informacao">Informação</a>
    	</li>
    	<li class="nav-item">
        	<a class="nav-link text-white" href="/desempenho">Desempenho</a>
    	</li>
    	<li class="nav-item">
       	<a class="nav-link text-white" href="/treinamento">Treinamento</a>
    	</li>
    	<li class="nav-item">
        	<a class="nav-link text-white" href="/teste">Teste</a>
    	</li>
    	<li class="nav-item">
        	<a class="nav-link text-white" href="#">Sair</a>
    	</li>
	</div>-->
</nav>
</center>