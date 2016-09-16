@extends('layouts.layout')
@section('title')
  All pessoas
@stop

@section('body')
  @foreach ($pessoas as $pessoa)
    <h3>{{$pessoa->id}}</h3>
    <h1>{{$pessoa->nome}}</h1>

    <br>
  @endforeach

  <a href="{{route('pessoa.create')}}">Criar</a>
  


@stop
