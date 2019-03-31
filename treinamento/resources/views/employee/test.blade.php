@extends('employee.templatesemployee.employeemodal')
@extends('templates.table')
@extends('templates.struct')

@section('title')
    Testes
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
    <form method="post">
        <div class="form-group">
            <label>Questão 1</label>
            <input type="text" class="form-control" value="a" disabled>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="check1">
            <label class="form-check-label" for="check1">OP1</label>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="check2">
            <label class="form-check-label" for="check2">OP2</label>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="check3">
            <label class="form-check-label" for="check3">OP3</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    </form>
    @endsection
@endsection