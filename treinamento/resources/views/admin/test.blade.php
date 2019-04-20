@extends('templates.modal')
@extends('templates.table')
@extends('templates.home')

@section('css')
  <link rel="stylesheet" type="text/css" href="/css/menu.css">
  <style type="text/css">
    #g{
      color: green;
      text-decoration: none;
    }
    .v:hover #g{
      color: white;
    }
    #y{
      color: yellow;
      text-decoration: none;
    }
    .a:hover #y{
      color: white;
    }
  </style>
@endsection

@section('title')
    Teste
@endsection

@section('body') 
<center>
    <center>
    <button style="margin-top: -10px; color: white; margin-left: -30px; border-radius: 20px; font-size: 18pt;" type="button" class="funci v btn btn-outline-success btn-lg"><a id="g" href="/cadastrar_teste" >Cadastrar</a></button>
  </center>
    @section('tabletitle')
      <th scope="col">Nome</th>
      <th scope="col">Área</th>
      <th scope="col">Cargo</th>
      <th scope="col"></th>
      <th scope="col"></th>
    @endsection

    @section('tablebody')
      <td>Teste1</td>
      <td>Área1</td>
      <td>Cargo1</td>      
      <td><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#visualization">Visualizar</button></td>
      <th><a href="/alterar_teste" style="color: white; margin-left: -70px;" class="btn btn-warning btn-sm">Alterar</a></th>
      <td><button style="margin-left: -30px;" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">Excluir</button></td>
    @endsection
@section('modalvisualization')
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" value="" disabled>
    </div>
    <div class="row">
        <div class="col">
            <label for="desc">Descrição</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div><br>
        <!--Teste questão 1-->
        <div class="form-group">
            <label for="ques1">Questão 1</label>
            <input type="text" class="form-control" value="" disabled>                                          
        </div>
    <div class="row">
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 2--><br>
        <div class="form-group">
            <label for="ques1">Questão 2</label>
            <input type="text" class="form-control" value="" disabled>                                          
        </div>
    <div class="row">
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
@endsection
<form method="POST" action="">
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content" style="margin-top: 200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="excluir">Excluir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <h2 class="lead text-center" style="font-size: 15pt; font-weight: bold;">Tem certerza que deseja excluir?</h2>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-md" class="btn btn-success">Sim</button>
                      <button style="color: white;" class="btn btn-warning btn-md" class="btn btn-success">Não</button>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </form>
@endsection