@extends('layouts.layout')
@section('title')
Criar nova pessoas
@stop

@section('body')
  {!!Form::open(['route' => 'pessoa.store'])!!}

  {!!Form::label('nome', 'Nome')!!}
  {!!Form::text('nome', null, ['placeholder' => "Dê um nome"])!!}

  {!!Form::submit('Criar')!!}

  {!!Form::close()!!}
@stop
