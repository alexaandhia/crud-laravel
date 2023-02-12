@extends('layout')
@section('content')

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li class="alert alert-danger" {{ $error }}></li>
        @endforeach 
    </ul>
@endif
<body>
    <h1 class="position-absolute top-0 start-50 translate-middle-x">Edit Data</h1>
    <br><br><br>
    <form action="/change/{{$data->id}}" class="card ms-auto mx-auto" style="width: 18rem;" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <!-- @csrf ngambil data dari inputnya, terus kirim ke controller terus kirim ke model terus ke database -->
    <!-- attribute value fungsinya buat taro lagi data sebelumnya di form edit, pokonya gitu lahh -->
        <strong>NIS</strong>
        <input type="number" name="nis" placeholder="Masukkan NIS anda" value="{{$data->nis}}"> 
        <strong>Nama</strong>
        <input type="text" name="nama" placeholder="Masukkan nama" value="{{$data->nama}}">
        <strong>Jenis Kelamin</strong>
        <select name="JK" id="">
            <option value="perempuan" value="perempuan" {{ $data->JK == "perempuan" ? 'selected' : ''}} >Perempuan</option>
            <option value="laki-laki"  value="laki-laki" {{ $data->JK == "laki-laki" ? 'selected' : ''}}  >Laki-laki</option>
        </select>
        <strong>Umur</strong>
        <input type="number" name="umur" placeholder="Masukkan umur anda" value="{{$data->umur}}"> 
        <strong>Foto</strong>
        <img src="{{asset('assets/image/' . $data->foto)}}" width="80" height="80"><br>
        <input type="file" name="foto">
        <button type="submit" class="btn btn-dark">save</button>
        <a href="{{route('home')}}" class="btn btn-danger">back</a>
    </form>
</body>
@endsection

<!-- pemanggilan bisa pake path (pake slash) atau name (yang route) -->