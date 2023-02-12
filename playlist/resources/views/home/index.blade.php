@extends('layout')
@section('content')

@if (session('successAdd'))
        <ul class="alert alert-success" role="alert">{{ session('successAdd') }}</ul>
    <!-- bisa pake Session::get('successAdd') kalo pake :: itu class, jadi harus kapital awalnya-->
    @endif
@if (session('successUpdate'))
<ul class="alert alert-info" role="alert">{{ session('successUpdate') }}</ul>
@endif

<body>
    <h1>Playlist Table</h1>
<a href="/add" class="btn btn-outline-success">Add new Song</a> <br>

<form action="">
    <select name="type" id="">
            <option value="day">day</option>
            <option value="night">night</option>
        </select>
</form>

<table class="table">

<tr>
    <th>#</th>
    <th>Song Title</th>
    <th>Artist</th>
    <th>Genre</th>
    <th>Playlist</th>
    <th>link</th>
    <th>Action</th>
</tr>
@php
$i = 1;
@endphp

@foreach($data as $item)
<tr>
    <th>{{ $i++ }}</th>
    <td>{{$item->title}}</td>
    <td>{{$item->artist}}</td>
    <td>{{$item->genre}}</td>
    <td>{{$item->playlist}}</td>
    <td><a href="{{$item->link}}">Link</a></td>
    <td>
                <a href="/edit/{{$item->id}}" class="btn btn-outline-success">Edit</a>
                <form action="/delete/{{$item->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger mt-1">delete</button>
                </form>
            </td>
</tr>
@endforeach
</table>

</body>
@endsection