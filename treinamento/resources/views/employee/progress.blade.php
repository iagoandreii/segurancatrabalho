@extends('templates.table')
@extends('templates.home')

@section('title')
    Progresso do funcionário
@endsection

@section('body')
    <br><br>
    <h1 class="display-4 text-center text-success">Progresso</h1>
    <div class="container"><br>
    <div class="progress" style="top:100px;">
        <div class="progress-bar-striped progress-bar-animated bg-warning text-white text-center" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
        <div class="progress-bar-striped progress-bar-animated bg-success text-white text-center" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
    </div>
    </div>
@endsection