@extends('layout')
@section('content')



<body>


    
<form action="/change/{{$data->id}}" class="card ms-auto mx-auto" style="width: 18rem;" method="post">
<h3>Edit Playlist!</h3>
    @csrf

    <strong>Song Title</strong>
    <input type="text" name="title" placeholder="Insert Song Title" value="{{$data->title}}">

    <strong>Song Artist</strong>
    <input type="text" name="artist" placeholder="Insert Song Artist" value="{{$data->artist}}">

    <strong>Genre</strong>
    <select name="genre" id="genre" name="genre" onchange="showGenre()">
            <option value="Pop" {{ $data->genre == "pop" ? 'selected' : ''}}>Pop</option>
            <option value="Rock" {{ $data->genre == "rock" ? 'selected' : ''}}>Rock</option>
            <option value="Indie" {{ $data->genre == "indie" ? 'selected' : ''}}>Indie</option>
            <option value="Ballad" {{ $data->genre == "ballad" ? 'selected' : ''}}>Ballad</option>
            <option value="K-pop" {{ $data->genre == "k-pop" ? 'selected' : ''}}>K-pop</option>
            <!-- <option value="another">another</option> -->
    </select>

    <strong name="playlist">playlist</strong>
                <input type="radio" name="playlist" value="day" id="day" value="{{$data->playlist}}">
                <label for="day">day</label><br>
                <input type="radio" name="playlist" value="night" id="night"  value="{{$data->playlist}}"> 
                <label for="night">night</label><br>

    <strong>Link</strong>
    <input type="text" name="link" placeholder="Insert Song Link" value="{{$data->link}}">

                <button type="submit" class="btn btn-dark">save</button>
        <a href='/' class="btn btn-danger">back</a>

</form>

<script>
        function showGenre() {
            var genre = document.getElementById("genre").value;
            var another = document.getElementById("another");
            if (genre == "another") {
                another.style.display = "";
            }else {
                another.style.display = "none";
            }
        } 
    </script>
</body>
@endsection