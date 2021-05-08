@extends('layouts.initial')

@section('title')
  Login
@endsection

<link rel="stylesheet" href="/css/login.css">

@section('page-title')
 Faça o Login
@endsection

@section('page-subtitle')
 Insira suas Informações de login
@endsection

@section('content')
<div class="column">
  <form class="column" action="{{route("login.auth")}}" method="post">
    @csrf
    <input type="text" required name="email" placeholder="Email">
    <input type="password" required name="password" placeholder="Senha">
    <input type="submit" value="Pronto">
  </form>
  <span class="option">Ainda não tem uma conta? <a href="/register">Registrar-se</a></span>
</div>
@endsection
