@extends('employee.templatesemployee.employeemodal')
@extends('templates.table')
@extends('templates.struct')

@section('title')
    Treinamentos
@endsection

@section('body')
 @include('employee.templatesemployee.employeemenu')
 @section('tabletitle')
    <th scope="col">Nome</th>
    <th scope="col">Área</th>
    <th scope="col"></th>
@endsection
@section('tablebody')
    <th scope="row"></th>
    <th scope="row"></th>
    <th scope="row"><button type="button" class="funci btn btn-outline-success btn-sm" data-toggle="modal" data-target="#visualization">Visualizar</button></th>
@endsection
@section('modalvisualization')    
    <div class="form-group">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/itMS9JrUECo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div><br>
@endsection
@endsection