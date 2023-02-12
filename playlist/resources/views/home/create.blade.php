@extends('layout')
@section('content')



<body>


    
<form action="{{ route('store') }}" class="card ms-auto mx-auto" style="width: 18rem;" method="post">
<h3>Create New Playlist!</h3>
    @csrf

    <strong>Song Title</strong>
    <input type="text" name="title" placeholder="Insert Song Title">

    <strong>Song Artist</strong>
    <input type="text" name="artist" placeholder="Insert Song Artist">

    <strong>Genre</strong>
    <select name="genre" id="genre" name="genre" onchange="showGenre()">
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
            <option value="Indie">Indie</option>
            <option value="Ballad">Ballad</option>
            <option value="K-pop">K-pop</option>
            <!-- <option value="another">another</option> -->
    </select>

    <strong name="playlist">playlist</strong>
                <input type="radio" name="playlist" value="day" id="day">
                <label for="day">day</label><br>
                <input type="radio" name="playlist" value="night" id="night"> 
                <label for="night">night</label><br>


    <strong>Link</strong>
    <input type="text" name="link" placeholder="Insert Song Link">


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