@extends('templates.struct')
@section('title')
Cadastro de Funcionário
@endsection
@section('css')
  <style type="text/css">
    body{
      background: url('css/yellow.jpg');
    }
    .p{
      box-shadow: 1px 2px 3px 5px rgba(0,0,0,.2);
      background-color: white;
    }
  </style>
@endsection
@section('body')
<div class="container p">
    
    <div style="top: 10px;" class="alert alert-warning">
      <strong>Warning!</strong> Indicates a warning that might need attention.
    </div>

    <div class="alert alert-danger">
      <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
    </div>
    
    <div class="container">
    <br><br>
    <div class="container">
    <form action="#" method="POST">
    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" class="form-control" id="name" name="nome">
    </div>
    <div class="row">
      <div class="col">
        <label for="desc">Descrição</label>
        <input type="text" class="form-control" id="desc" name="des">
      </div>
      <div class="col">
        <label for="cho">Carga horária</label>              
        <input type="number" class="form-control" id="cho" name="ch">
      </div>
    </div><br>
    <div class="row">
      <div class="col">
        <label for="li1">Link</label>
        <input type="text" class="form-control" id="li1" name="l1">
      </div>  
    </div><br>
    <div class="row" style="margin-left: 0px;">
          <div class="form-group">
            <button type="submit" class="btn btn-success btn-md">Alterar</button>
          </div>&nbsp
          <div class="form-group">
            <a class="btn btn-danger btn-md" href="javascript:history.back()" style="text-decoration: none;color: white;">Voltar</a>
          </div>
        </div>
  </form>
  </div>
</div>