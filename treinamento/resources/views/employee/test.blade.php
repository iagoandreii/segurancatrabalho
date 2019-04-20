@extends('templatesmodal')
@extends('templatestable')
<div style="margin-top: -8px;">Lazal</div>
@extends('templates.home')

@section('css')
  <link rel="stylesheet" type="text/css" href="css/menu.css">
@endsection

@section('title')
    Teste
@endsection

@section('body')
    @section('tabletitle')
      <th scope="col">Nome</th>
      <th scope="col">Árae</th>
      <th scope="col">Cargo</th>
    @endsection

    @section('tablebody')
      <td>Teste1</td>
      <td>Área1</td>
      <td>Cargo1</td>
    @endsection
@section('modalvisualization')
<form>
    <!--Teste questão 1-->
    <div class="form-group">
        <input type="text" class="form-control" value="" disabled>                                          
    </div>
    <div class="row">
        <div class="col">
            <label><input type="text" class="form-control text-center" value="jhd" disabled></label>
            <input type="checkbox">
        </div>
        <div class="col">
            <label><input type="text" class="form-control text-center" value="jhd" disabled></label>
            <input type="checkbox">
        </div>
        <div class="col">
            <label><input type="text" class="form-control text-center" value="jhd" disabled></label>
            <input type="checkbox">
        </div>
    </div><br><br><br>
        <!--Teste questão 2-->
    <div class="form-group">
        <input type="text" class="form-control" value="" disabled>
    </div>
    <div class="row">
        <div class="col">
            <label><input type="text" class="form-control text-center" value="jhd" disabled></label>
            <input type="checkbox">
        </div>
        <div class="col">
            <label><input type="text" class="form-control text-center" value="jhd" disabled></label>
            <input type="checkbox">
        </div>
        <div class="col">
            <label><input type="text" class="form-control text-center" value="jhd" disabled></label>
            <input type="checkbox">
        </div>
    </div><br><br>
    <div class="form-group">
        <input class="btn btn-outline-success btn-block" type="submit" value="Enviar" name="enviar">
    </div>
</form>
@endsection
@endsection