@extends('templates.table')
<div style="margin-top: -8px;">Lazal</div>
@extends('templates.home')

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
        <th scope="col"></th>
    @endsection
    @section('tablebody')
        <td>Treinamento1</td>
        <td>Área1</td>
        <td>Cargo1</td>
        <th><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#visualization">Visualizar</button></th>
    @endsection
   
    @section('modalvisualization')
      <div class="form-group">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/itMS9JrUECo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div><br>
      <div class="form-group">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/itMS9JrUECo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div><br>
    @endsection
@endsection