@extends('layouts.layout')
@section('title')
Edit {{$pessoa->nome}}
@stop

@section('body')
  {!!Form::model($pessoa, [
    'method' => 'patch',
    'route' => ['pessoa.update', $pessoa->id]
  ])!!}

  {!!Form::label('nome', 'Nome')!!}
  {!!Form::text('nome', $pessoa->nome, ['placeholder' => "Dê um nome"])!!}

  {!!Form::submit('Edit')!!}
  {!!Form::close()!!}

@stop
