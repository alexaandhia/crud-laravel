@extends('layout')
@section('content')

<H1>INI DASSHBPOARD {{Auth::user()->name}}</H1>

<a href='/logout' class="btn btn-danger">logout</a>
@endsection