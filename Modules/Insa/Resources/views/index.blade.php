@extends('insa::layouts.master')
@section('title','Inicio')
@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('insa.name') !!}
    </p>
     <!-- Content Header (Page header) -->
     
@endsection
