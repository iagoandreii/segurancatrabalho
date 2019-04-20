@extends('templates.table')
@extends('templates.modal')
<div style="margin-top: -8px;">Lazal</div>
@extends('templates.home')

@section('css')
  <link rel="stylesheet" type="text/css" href="/css/menu.css">
@endsection

@section('title')   
Funcionário 
@endsection

@section('body')
@section('tabletitle')
  <th scope="col">Nome</th>
  <th scope="col">Status</th>
@endsection

@section('tablebody')
  <td>Nome1</td>
  <td>Andamento</td>
@endsection

  @section('modalvisualization')
  <form action="#" method="POST">
    <div class="form-group">
      <label for="nome">Nome completo</label>
      <input type="text" id="nome" class="form-control" name="nom" disabled>
    </div><br>
        <div class="row">
          <div class="col">
            <label for="datan">Data de nascimento</label><br>
            <input type="date" id="datan" class="form-control" name="dn" disabled>
          </div>
          <div class="col">
            <label for="cp">CPF</label><br>
            <input type="text" id="cp" class="form-control" name="cpf" disabled>
          </div>
          <div class="col">
            <label for="r">RG</label><br>
            <input type="text" id="rg" class="form-control" name="rg" disabled>
          </div>
        </div><br><br>
        <div class="row"> 
          <div class="col">
            <label for="mat">Matricula</label><br>
            <input type="text" id="mat" class="form-control" name="matricula" disabled>
          </div>
          <div class="col">
            <label for="email">Email</label><br>
            <input type="email" id="email" class="form-control" name="mail" disabled>
          </div>
        </div><br><br>
        <div class="row">
          <div class="col">
            <label for="car">Cargo</label>
            <input type="text" id="car" class="form-control" name="cargo" disabled>
          </div>
          <div class="col">
            <label for="ate">Atividade exercida</label>
            <textarea class="form-control" id="ate" name="atividade" style="resize: none;" disabled></textarea>
          </div>
          <div class="col">
            <label for="edr">Exposição de risco</label>
            <textarea class="form-control" id="edr" name="exposicao" style="resize: none;" disabled></textarea>
          </div>
    </div><br><br>
      <div class="row">
        <div class="col">
          <label for="dini">Data do inicio</label>
          <input type="date" id="dini" class="form-control" name="di" disabled>
        </div>  													
        <div class="col">
          <label for="dpr">Prazo</label>
          <input type="date" id="dpr" class="form-control" name="prazo" disabled>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col">
          <label for="ce">CEP</label><br>
          <input type="text" class="form-control" name="cep" disabled>
        </div>
        <div class="col">
          <label for="r">Rua</label><br>
          <input type="text" id="rua" class="form-control" name="rua" disabled>
        </div>
        <div class="col">
          <label for="b">Bairro</label><br>
          <input type="text" id="bairro" class="form-control" name="bairro" disabled>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col">
          <label for="c">Cidade</label><br>
          <input type="text" id="cidade" class="form-control" name="cidade" disabled>
        </div>
        <div class="col">
          <label for="e">Estado</label><br>
          <input type="text" id="estado" class="form-control" name="estado" disabled>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col">
          <label for="tlog">Tipo de logradoro</label><br>
          <input type="text" id="tlog" class="form-control" name="tlogra" disabled>
        </div>
        <div class="col">
          <label for="log">Logradoro</label><br>
          <input type="text" id="log" class="form-control" name="logra" disabled>
        </div>
      </div>
    </div>
  </form>
  @endsection
@endsection