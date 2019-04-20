@extends('templates.table')
@extends('templates.home')

@section('title')   
Funcionário 
@endsection
<div style="margin-top:-25px;">Lazal</div>
@section('css')
  <link rel="stylesheet" type="text/css" href="css/menu.css">
@endsection

@section('body')
    @section('tabletitle')
        <th scope="col">Nome</th>
        <th scope="col">Número de acertos</th>
        <th scope="col">Número de erros</th>
        <th scope="col">Área</th>
        <th scope="col">Status</th>
    @endsection
    @section('body')
        <td></td>
    @endsection 
@endsection