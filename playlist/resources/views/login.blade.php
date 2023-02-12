@extends('layout')
@section('content')

@if (Session::get('error'))
{{Session::get('error')}}
@endif

<form action="{{route('auth')}}" method="post" class="card ms-auto mx-auto" style="width: 18rem;">
@csrf

<i class="bi bi-brightness-alt-high"></i>
<h3>Login here</h3> <br>    

    <strong>Email</strong>
    <input type="email" name="email" id="email" placeholder="insert your email">

    <strong>Password</strong>
    <input type="password" name="password" id="password" placeholder="insert super hard password">

    <button type="submit" class="btn btn-primary">Login</button>
</form>

@endsection