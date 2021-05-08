@extends('layouts.initial')

@section('title')
 Conversas 
@endsection

<link rel="stylesheet" href="/css/chat.css">

@section('page-title')
 Bem Vindo {{Auth::user()->name}}
@endsection

@section('page-subtitle')
 Converse com os outros!
@endsection

@section('content')
<div class="container">
  <div class="row">
      <div>
          <div id="app" class="panel panel-default">

              <div class="panel-body">
                  <chat-messages :messages="messages"></chat-messages>
              </div>
              <div class="panel-footer input-container">
                  <chat-form
                      v-on:messagesent="addMessage"
                      :user="{{ Auth::user() }}"
                  ></chat-form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
