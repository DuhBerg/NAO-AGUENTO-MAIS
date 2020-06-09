@extends('layout.site')
@section('titulo','Professor')
@section('perfil',Auth::user()->name)
@section('email',Auth::user()->email)
@section('sair','Sair')
@section('home-active','active')


@section('navbar')

@include('layout._includes.sidenav')

@endsection


@section('conteudo')
<h3>Olá {{Auth::user()->name}}!</h3>



  <div class="modal" id="modal-criar">
    <div class="modal-content">

      <h4 class="light">Criar turma</h4>

      <form style="padding-top:20px;" action="{{ route('professor.turmas.criar') }}" method="post">

        {{ csrf_field() }}

      <div class="row">
        <div class="input-field">
          <input type="text" name="disciplina" id="disciplina">
          <label for="disciplina">Disciplina</label>
        </div>
      </div>

    </div>

    <div class="modal-footer">

        <button class="waves-effect waves-light btn indigo lighten-2">Criar</button>
        <a class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>

    </div>
  </div>


  <script>
    //Modal
    $(document).ready(function(){
      $('.modal').modal();
    });
  </script>


@endsection
