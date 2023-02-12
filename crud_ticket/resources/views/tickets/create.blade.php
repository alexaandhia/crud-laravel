@extends('layouts.main')
  
@section('container')
<body>
    <style>
    body {
        background-image: url(/img/bgone.jpg);
        background-size: cover;
    }
    </style>


<div class="row">
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    <div class="card mx-auto" style="width: 18rem;">
     <div class="card-body">
    <h3>Create Reservation</h3>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>reservation:</strong>
                <input type="text" name="reservation" class="form-control" placeholder="reservation">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Destination</strong>
            <select class="form-select" aria-label="Default select example" name="tujuan">
        <option selected>Choose your destination</option>
        <option value="Domestic">Domestic</option>
        <option value="International">International</option>
        <option value="Transit">Transit</option>
            </select>

        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="datetime-local" name="date" class="form-control" placeholder="date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             </div>
        </div>
        <br>
        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
         <label class="form-check-label" for="flexCheckIndeterminate">
         <p> send my flight update on Email </p>
        </label>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="{{ route('tickets.index') }}"> Back</a>
        </div>
    </div>
</div>

     
</form>
</body>
@endsection