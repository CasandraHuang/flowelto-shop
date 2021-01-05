@extends('layouts.app')

@section('content')

<h3 class="text-center ">List Bouquet!</h1>
<div class="container">
  <div class="row justify-content-center">

  @foreach($bungas as $b)
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="{{ asset("assets/$b->photo_bunga") }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $b->nama_bunga}}</h5>
          <p class="card-text" ><strong>Harga :</strong> Rp. {{number_format( $b->harga) }}</p>
          @can('isUser')
          <a href="{{ url('pesan') }}/{{ $b->id }}" class="btn btn-primary">Pesan</a>
          @endcan
          @can('isManager')
          <a href="{{ url('flower') }}/{{ $b->id }}" class="btn btn-primary">Update Flower</a>
          <a href="{{ url('flower') }}/{{ $b->id }}" class="btn btn-sm btn-danger">Delete Flower</a>
          @endcan
        </div>
      </div>
    </div>
    @endforeach
    </div>
  </div>

@endsection
