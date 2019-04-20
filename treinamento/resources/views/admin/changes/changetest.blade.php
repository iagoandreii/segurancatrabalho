@extends('templates.struct')
@section('title')
Alterar Teste
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
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control">
    </div>
    <div class="row">
        <div class="col">
            <label for="desc">Descrição</label>
            <input type="text" class="form-control">
        </div>
    </div><br>
        <!--Teste questão 1-->
        <div class="form-group">
            <label for="ques1">Questão 1</label>
            <input type="text" class="form-control">                                          
        </div>
    <div class="row">
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control">
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control">
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control">
        </div>
    </div>
        <!--Teste questão 2--><br>
        <div class="form-group">
            <label for="ques1">Questão 2</label>
            <input type="text" class="form-control">                                          
        </div>
    <div class="row">
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control">
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control">
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control">
        </div>
    </div>
    <br>
        <div class="row" style="margin-left: 0px;">
          <div class="form-group">
            <button type="submit" class="btn btn-success btn-md">Alterar</button>
          </div>&nbsp
          <div class="form-group">
            <a class="btn btn-danger btn-md" href="javascript:history.back()" style="text-decoration: none;color: white;">Voltar</a>
          </div>
        </div>
  </div>
</div>
</div>
@endsection