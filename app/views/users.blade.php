@extends('layout')

@section('content')
    @foreach($users as $user)
        <p>{{ $user->firstname }}</p>
    @endforeach
@stop