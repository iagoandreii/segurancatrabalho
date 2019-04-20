@extends('templates.struct')
@section('title')
Cadastro de Funcionário
@endsection
@section('css')
  <style type="text/css">
    body{
      background: url('css/yellow.jpg');
    }
    .p{
      box-shadow: 1px 2px 3px 5px rgba(0,0,0,.2);
      background-color: white;
    }
  </style>
@endsection
@section('body')
<div class="container p">
    
    <div style="top: 10px;" class="alert alert-warning">
      <strong>Warning!</strong> Indicates a warning that might need attention.
    </div>

    <div class="alert alert-danger">
      <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
    </div>
    
  <div class="container">
    <br><br>
	<form action="#" method="POST">
		<div class="form-group">
        <label for="nome">Nome completo<span class="text-danger">*</span></label>
        <input type="text" id="nome" class="form-control" name="nom">
      </div><br>
      <div class="row">
        <div class="col">
          <label for="datan">Data de nascimento<span class="text-danger">*</span></label><br>
          <input type="date" id="datan" class="form-control" name="dn">
        </div>
        <div class="col">
          <label for="cp">CPF<span class="text-danger">*</span></label><br>
          <input type="text" onkeypress="return js/somenteNumeros(event)" id="cp" class="form-control" name="cpf">
        </div>
        <div class="col">
          <label for="r">RG<span class="text-danger">*</span></label><br>
          <input type="text" onkeypress="return js/somenteNumeros(event)" id="rg" class="form-control" name="rg">
        </div>
      </div><br><br>
      <div class="row">
        <div class="col">
          <label for="mat">Matricula<span class="text-danger">*</span></label><br>
          <input type="text" onkeypress="return somenteNumeros(event)" id="mat" class="form-control" name="matricula">
        </div>
        <div class="col">
          <label for="email">Email<span class="text-danger">*</span></label><br>
          <input type="email" id="email" class="form-control" name="mail">
        </div>
        <div class="col">
          <label for="sen">Senha<span class="text-danger">*</span></label><br>
          <input type="text" id="sen" class="form-control" name="senha">
        </div>
      </div><br><br>
      <div class="row">
        <div class="col">
          <label for="car">Cargo<span class="text-danger">*</span></label>
          <input type="text" id="car" class="form-control" name="cargo">
        </div>
        <div class="col">
          <label for="ate">Atividade exercida<span class="text-danger">*</span></label>
          <textarea class="form-control" id="ate" name="atividade" style="resize: none;"></textarea>
        </div>
        <div class="col">
          <label for="edr">Exposição de risco<span class="text-danger">*</span></label>
          <textarea class="form-control" id="edr" name="exposicao" style="resize: none;"></textarea>
        </div>
      </div>
      <br><legend>Desenvolvimento</legend><br>
      <div class="row">
        <div class="col">
          <label for="dini">Data do inicio<span class="text-danger">*</span></label>
          <input type="date" id="dini" class="form-control" name="di">
        </div>                            
        <div class="col">
          <label for="dpr">Prazo<span class="text-danger">*</span></label>
          <input type="date" id="dpr" class="form-control" name="prazo">
        </div>
      </div>
      <br><legend>Endereço<span class="text-danger">*</span></legend><br>
      <div class="row">
        <div class="col">
          <label for="ce">CEP<span class="text-danger">*</span></label><br>
          <input type="text" onkeypress="return somenteNumeros(event)" id="cep" onblur="pesquisacep(this.value);" class="form-control" name="cep">
        </div>
        <div class="col">
          <label for="r">Rua<span class="text-danger">*</span></label><br>
          <input type="text" id="rua" class="form-control" name="rua" disabled>
        </div>
        <div class="col">
          <label for="b">Bairro<span class="text-danger">*</span></label><br>
          <input type="text" id="bairro" class="form-control" name="bairro" disabled>
        </div>
        <div class="col">
          <label for="b">Número<span class="text-danger">*</span></label><br>
          <input type="text" id="bairro" class="form-control" name="bairro">
        </div>
      </div><br><br>
      <div class="row">
        <div class="col">
          <label for="c">Cidade<span class="text-danger">*</span></label><br>
          <input type="text" id="cidade" class="form-control" name="cidade" disabled>
        </div>
        <div class="col">
          <label for="e">Estado<span class="text-danger">*</span></label><br>
          <input type="text" id="estado" class="form-control" name="estado" disabled>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col">
          <label for="tlogradouro">Tipo de logradouro<span class="text-danger">*</span></label>
          <select id="tlogradouro" name="tlog" class="form-control">
            <option value="0" selected></option>
            <option value="1">Aeroporto</option>
            <option value="2">Alameda</option>
            <option value="3">Área</option>
            <option value="4">Avenida</option>
            <option value="5">Campo</option>
            <option value="6">Chácara</option>
            <option value="7">Colônia</option>
            <option value="8">Condomínio</option>
            <option value="9">Conjunto</option>
            <option value="10">Distrito</option>
            <option value="11">Esplanada</option>
            <option value="12">Estação</option>
            <option value="13">Estrada</option>
            <option value="14">Favela</option>
            <option value="15">Feira</option>
            <option value="16">Jardim</option>
            <option value="17">Ladeira</option>
            <option value="18">Lago</option>
            <option value="19">Lagoa</option>
            <option value="20">Largo</option>
            <option value="21">Loteamento</option>
            <option value="22">Morro</option>
            <option value="23">Núcleo</option>
            <option value="24">Parque</option>
            <option value="25">Passarela</option>
            <option value="26">Pátio</option>
            <option value="27">Praça</option>
            <option value="28">Quadra</option>
            <option value="29">Recanto</option>
            <option value="30">Residencial</option>
            <option value="31">Rodovia</option>
            <option value="32">Rua</option>
            <option value="33">Setor</option>
            <option value="34">Sítio</option>
            <option value="35">Travessa</option>
            <option value="36">Trecho</option>
            <option value="37">Trevo</option>
            <option value="38">Vale</option>
            <option value="39">Vereda</option>
            <option value="40">Via</option>
            <option value="41">Viaduto</option>
            <option value="42">Viela</option>
            <option value="43">Vila</option>
          </select>
        </div>
        <div class="col">
          <label for="tlogradouro">Logradouro</label>
          <input type="text" id="tlogradouro" class="form-control" name="log">
        </div>
      </div><br>
        <div class="row" style="margin-left: 0px;">
          <div class="form-group">
            <button type="submit" class="btn btn-success btn-md">Cadastrar</button>
          </div>&nbsp
          <div class="form-group">
            <a class="btn btn-danger btn-md" href="javascript:history.back()" style="text-decoration: none;color: white;">Voltar</a>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection