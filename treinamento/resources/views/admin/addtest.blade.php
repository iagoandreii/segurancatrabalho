@extends('admin.administrator.modal')
@extends('admin.administrator.table')
@extends('admin.administrator.register')
@extends('templates.menu')
@extends('templates.struct')

@section('css')
  <link rel="stylesheet" type="text/css" href="css/menu.css">
@endsection

@section('title')
    Teste
@endsection

@section('body')
    @section('tabletitle')
      <th scope="col">Nome</th>
      <th scope="col">Área</th>
      <th scope="col">Cargo</th>
    @endsection

    @section('tablebody')
      <td>Teste1</td>
      <td>Área1</td>
      <td>Cargo1</td>
    @endsection
    @section('modalregister')
        <form action="#" method="POST">
                <div class="form-group">
                        <!--Informação do teste-->
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="nome">
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="desc">Descrição</label>
                            <input type="text" class="form-control" id="desc" name="des">
                        </div>
                    </div><br>
                        <!--Teste questão 1-->
                    <div class="form-group">
                        <label for="ques1">Questão 1</label>
                        <input type="text" class="form-control" id="ques1" name="q1">
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op1" name="o1">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op2" name="o2">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op3" name="o3">
                        </div>
                    </div>
                        <!--Teste questão 2-->
                    <div class="form-group">
                        <label for="ques2">Questão 2</label>
                        <input type="text" class="form-control" id="ques2" name="q2">
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op12" name="o12">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op22" name="o22">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op32" name="o32">
                        </div>
                    </div>
        </form>
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
    <div class="row">
        <div class="col">
            <label for="ques1">Questão 1</label>
            <input type="text" class="form-control" value="" disabled>                                          
        </div>
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
        <!--Teste questão 2-->
    <div class="row">
        <div class="col">
            <label for="ques2">Questão 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
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
@section('modalchange')
<form action="#" method="POST">
<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="aname" name="anome">
</div>
<div class="row">
    <div class="col">
        <label for="desc">Descrição</label>
        <input type="text" class="form-control" id="adesc" name="ades">
    </div>
</div><br>
<div class="row">
    <div class="form-group">
        <label for="ques1">Questão 1</label>
        <input type="text" class="form-control" id="aques1" name="aq1">
    </div>
    <div class="row">
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop1" name="ao1">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop2" name="ao2">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop3" name="ao3">
    </div>
</div>
    <!--Teste questão 2-->
    <div class="form-group">
        <label for="ques2">Questão 2</label>
        <input type="text" class="form-control" id="aques2" name="aq2">
    </div>
<div class="row">
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop12" name="ao12">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop22" name="ao22">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop32" name="ao32">
    </div>
</div>
</form>
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