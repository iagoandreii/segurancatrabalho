@extends('templates.modal')
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
Funcionário 
@endsection

@section('body')
  <center>
    <button style="margin-top: -10px; color: white; margin-left: -30px; border-radius: 20px; font-size: 18pt;" type="button" class="funci v btn btn-outline-success btn-lg"><a id="g" href="/cadastrar_funcionario" >Cadastrar</a></button>
  </center>
  <div class="container">
    <table class="table table-success bg-light table-hover text-center" style="margin-top: 30px;">
        <thead>
            <tr char="active">
                <td>Nome1</td>
                <td>Sobrenome1</td>
                <td>Andamento</td>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>     
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Status</th>
                <th scope="row"><button style="margin-left: 0px;" type="button" class="funci v btn btn-outline-success btn-md" data-toggle="modal" data-target="#visualization">Visualizar</button></th>
                <th scope="row"><button style="margin-left: -30px;" type="button" class="funci a btn btn-outline-warning btn-md"><a id="y" href="/alterar_funcionario">Alterar</a></button></th>
                <th scope="row"><button style="margin-left: -30px;" type="button" class="funci btn btn-outline-danger btn-md" data-toggle="modal" data-target="#delete">Excluir</button></th>
            </tr>
        </tbody>
    </table>
</div>
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