@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
@foreach ($data as $isi)
    <p>ID {{$isi['id']}}</p> <br>
    <p>name {{$isi['name']}}</p> <br>
    <p>level {{$isi['level']}}</p> <br>
    <p>gold {{$isi['gold']}}</p> <br>
    @include('footer')
@endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop
