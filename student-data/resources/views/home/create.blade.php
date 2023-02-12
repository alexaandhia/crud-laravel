@extends('layout')
@section('content')

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li class="alert alert-success" {{ $error }}></li>
        @endforeach 
    </ul>
@endif
<body>
    <h1 class="position-absolute top-0 start-50 translate-middle-x">Input Data Siswa</h1>
    <br><br><br>
    <form action="{{ route('kirim-data') }}" class="card ms-auto mx-auto" style="width: 18rem;" method="post" enctype="multipart/form-data">
    @csrf
    <!-- @csrf ngambil data dari inputnya, terus kirim ke controller terus kirim ke model terus ke database -->
        <strong>NIS</strong>
        <input type="number" name="nis" placeholder="Masukkan NIS anda"> 
        <strong>Nama</strong>
        <input type="text" name="nama" placeholder="Masukkan nama">
        <strong>Jenis Kelamin</strong>
        <select name="JK" id="">
            <option value="perempuan">Perempuan</option>
            <option value="laki-laki">Laki-laki</option>
        </select>
        <strong>Umur</strong>
        <input type="number" name="umur" placeholder="Masukkan umur anda"> 
        <strong>Foto</strong>
        <input type="file" name="foto">
        <button type="submit" class="btn btn-dark">save</button>
        <a href="{{route('home')}}" class="btn btn-danger">back</a>
    </form>
</body>
@endsection

<!-- pemanngilan bisa pake path (pake slash) atau name (yang route) -->