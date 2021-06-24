@extends('layouts.initial')

@section('title')
  Página Inicial
@endsection

<link rel="stylesheet" href="/css/home.css">

@section('page-title')
 Olá, seja bem vindo ao Nell Chat
@endsection

@section('page-subtitle')
  O que deseja fazer?
@endsection

@section('content')
<div class="icon">
  <img width="225px" height="225px" src="./icons/server.png" alt="img">
</div>
<div class="row">
  <a href="/login">
  <div class="login-button">
    Fazer Login
  </div>
  </a>

  <div style="margin: 0px 10px">

  </div>

  <a href="/register">
  <div class="register-button">
    Criar Conta
  </div>
  </a>
</div>
@endsection
