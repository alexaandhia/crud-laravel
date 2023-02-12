@extends('layout')
@section('content')

@if (session('successAdd'))
        <ul class="alert alert-success" role="alert">{{ session('successAdd') }}</ul>

    <!-- bisa pake Session::get('successAdd') kalo pake :: itu class, jadi harus kapital awalnya-->
    @endif

    @if (session('successUpdate'))
        <ul class="alert alert-info" role="alert">{{ session('successUpdate') }}</ul>

    <!-- bisa pake Session::get('successAdd') kalo pake :: itu class, jadi harus kapital awalnya-->
    @endif
    
    @if (session('errorLogin'))
        <ul class="alert alert-danger" role="alert">{{ session('errorLogin') }}</ul>

    <!-- bisa pake Session::get('successAdd') kalo pake :: itu class, jadi harus kapital awalnya-->
    @endif

<body>
    <h1> Student Data </h1>
    <a href='/tambah-data' class="btn btn-outline-primary">Tambah data</a>
    <a href='/login' class="btn btn-outline-warning">Login</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
        @php
        $i = 1;
        @endphp

        @foreach ($data as $item)
        <tr>
            <!-- kalo penamaan mah sama aja dua duanya, gimana nyamannya aja -->
            <!-- kalo no nya diganti manggil id, nanti berantakan karena it depends on id di database -->
            <td>{{ $i++ }}</td>
            <td>{{$item->nis}}</td>
            <td>{{$item['nama']}}</td>
            <td>{{$item->JK}}</td>
            <td>{{$item->umur}}</td>
            <td> <img src="{{asset('assets/image/' . $item->foto)}}" width="100" height="100" alt=""> </td>
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
