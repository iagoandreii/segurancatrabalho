@extends('templates.table')
@extends('templates.home')

@section('title')
    Informações do funcionário
@endsection

@section('body')
    @section('tabletitle')
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">RG</th>
    @endsection
    @section('tablesubtitle')
        <th scope="row"></th>
    @endsection
@endsection