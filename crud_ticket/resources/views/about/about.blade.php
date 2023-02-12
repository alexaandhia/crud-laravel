@extends('layouts.main')
@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>

<style>
    body {
        background-image: url(/img/bgsix.jpg);
        background-size: cover;
    }
    </style>

<div class="top-30 end-50">
    <div class="card bg-secondary p-2 text-dark bg-opacity-50">
<div class="card-body" align=center>
        <img src= "{{ ('img/plane.jpg') }}" width= "200px" class="rounded-circle">
                <h5 class="card-title">Places to go</h5>
                <p>Presented by Quantum Airlines</p>
                <br>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" width="200" height="200">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ ('img/asgard.jpg') }} " class="d-block mx-auto" width="800" height="350" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Asgard</h5>
        <p>Realm of Aesir</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ ('img/atlantis.jpg') }}" class="d-block mx-auto" width="800" height="350" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Atlantis</h5>
        <p>deep sea treasure</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ ('img/wakanda.jpg') }}" class="d-block mx-auto" width="800" height="350" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Wakanda</h5>
        <p>most powerful land</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

                <br><br>


                <a href="/home" class="btn btn-outline-dark">Back</a>
        </div>

    </div>
    
</div>
</body>
</html>
@endsection