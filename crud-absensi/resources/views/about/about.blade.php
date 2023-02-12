@extends('layouts.main')
@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #ABD9FF;">
    <div class="top-30 end-50">
    <div class="card" style="background-color: #ABD9FF;">
        <div class="card-body" align=center>
        <img src= "{{ ('img/ricsohn.jpg') }}" width= "200px" class="rounded-circle">
                <h5 class="card-title">About</h5>
                <p class="card-text">
                    Name : Eric Sohn
                    <br>
                    Profession : Artist
                    <br>
                    Soundcloud : <a href = "https://soundcloud.com/official_theboyz">The Boyz</a>
                    <br><br>
                    <h5>Description</h5>
                    <p>He was born in South Korea and was raised Los Angeles, California
His ethnicity is Korean.
Eric has an older sister (who was born in 1999).
He likes playing sports, watching movies, dancing, and skating.
His specialty is playing baseball and quickly solving Rubix cubes.
Eric is fluent in English.
MBTI: ENFJ-A
Eric loves to clean and is in charge of cleaning the dorm.
Eric loves to skateboard. (Making film I’m your boy)
Eric, Hwall, Hyunjae, and Younghoon were in Melody Day’s ‘Colour’ MV.
His best friend idol star is Felix (Stray Kids). (vLive)
When Eric has free time he hangs out with Juyeon or go watch movies, sleep, play video games.
Juyeon says he wants to be in a dance unit with Eric, Hwall and Q
Eric is friends with Daehwi from Wanna One
Neon was his stage name candidate.
He was a baseball player in middle school.
Favourite Film Genre: Thriller</p>
                <br>
                <h5>Besties</h5>
                <br>
                <div class="" >
                <img src= "{{ ('img/mingyu.jpg') }} " width= "200px" class="rounded-circle top-70 start-70">
                <img src= "{{ ('img/sanha.jpg') }}" width= "200px" class="rounded-circle top-70 start-40">
                <img src= "{{ ('img/yongbok.jpg') }}" width= "200px" class="rounded-circle top-70 start-10">
                </div>
                <br><br>


                <a href="/" class="btn btn-outline-dark">Back</a>
        </div>

    </div>
    
</div>
</body>
</html>
@endsection