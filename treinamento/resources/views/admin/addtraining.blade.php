@extends('admin.administrator.modal')
@extends('admin.administrator.table')
@extends('admin.administrator.register')
@extends('templates.menu')
@extends('templates.struct')

@section('css')
  <link rel="stylesheet" type="text/css" href="css/menu.css">
@endsection

@section('title')
    Treinamento
@endsection

@section('body')
    @section('tabletitle')
        <th scope="col">Nome</th>
        <th scope="col">Árae</th>
        <th scope="col">Cargo</th>
    @endsection
    @section('tablebody')
        <td>Treinamento1</td>
        <td>Área1</td>
        <td>Cargo1</td>
    @endsection
    @section('modalregister')
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
                  <label for="li1">Link 1</label>
                  <input type="text" class="form-control" id="li1" name="l1">
                </div>
                <div class="col">
                  <label for="li2">Link 2</label>        			
                  <input type="text" class="form-control" id="li2" name="l2">
                </div>
        </form>
    @endsection
    @section('modalvisualization')
      <div class="form-group">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/itMS9JrUECo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="form-group">
        <button type="100%" class="trei btn btn-outline-danger btn-lg btn-block" data-toggle="modal" data-target="#excluirfuncionario">Excluir</button>
      </div><br>
      <div class="form-group">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/itMS9JrUECo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="form-group">
        <button type="100%" class="trei btn btn-outline-danger btn-lg btn-block" data-toggle="modal" data-target="#excluirfuncionario">Excluir</button>
      </div><br>
    @endsection
    @section('modalchange')
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
        <label for="li1">Link 1</label>
        <input type="text" class="form-control" id="li1" name="l1">
      </div>
      <div class="col">
        <label for="li2">Link 2</label>        			
        <input type="text" class="form-control" id="li2" name="l2">
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