@extends('layouts.initial')

@section('title')
  Registro
@endsection

<link rel="stylesheet" href="/css/login.css">

@section('page-title')
 Crie sua conta agora
@endsection

@section('page-subtitle')
 Preencha os dados
@endsection

@section('content')
<div class="column">
  <form class="column" action="{{route("register.store")}}" method="post">
    @csrf
    <input type="text" required name="name" placeholder="Nome">
    <input type="text" required name="username" placeholder="Usuário">
    <input type="text" required name="email" placeholder="Email">
    <input type="password" required name="password" placeholder="Senha">
    <input type="password"  placeholder="Repita a Senha">
    <input type="submit" value="Criar Conta">
  </form>
  <span class="option">Já possuí uma conta? <a href="/login">Entrar</a></span>
</div>
@endsection
