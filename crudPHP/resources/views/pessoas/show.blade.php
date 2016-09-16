@extends('layouts.layout')
@section('title')
{{$pessoa->nome}}
@stop

@section('body')

  {!!Form::open([
    'method' => 'delete',
    'route' => ['pessoa.destroy', $pessoa->id]
  ])!!}

  <h1>{{$pessoa->nome}}</h1>

  <a href="{{route('pessoa.edit', $product->id)}}">Editar</a>
  {!!Form::submit('Delete')!!}
  {!!Form::close()!!}

@stop
