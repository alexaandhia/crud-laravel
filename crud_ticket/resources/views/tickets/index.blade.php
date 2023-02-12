@extends('layouts.main')
     
@section('container')
<body>
<style>
    body {
        background-image: url(/img/bgthree.jpg);
        background-size: cover;
    }
    </style>
    
    <!-- <div class="row"> -->
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Flight Reservation</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tickets.create') }}"> Create</a>
                <br><br>
            </div>
        </div>
    <!-- </div> -->
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    @auth
    <table class="table table-bordered bg-secondary p-2 text-dark bg-opacity-50">
        <tr>
            <th>No</th>
            <th>Reservation</th>
            <th>Name</th>
            <th>Flight Plan</th>
            <th>Jenis Tiket</th>
            <th>Tanggal Pesan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tickets as $ticket)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ticket->reservation  }}</td>
            <td>{{ $ticket->name }}</td>
            <td>{{ $ticket->tujuan }}</td>
            <td>{{ $ticket->jenis }}</td>
            <td>{{ $ticket->date}}</td>
            <td>
                <form action="{{ route('tickets.destroy',$ticket->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('tickets.edit',$ticket->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endauth
    
    {!! $tickets->links() !!}

</body>
        
@endsection