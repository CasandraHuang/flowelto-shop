@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">
    <div class="card">

        <div class="card-body">
          <div class="row">
          <div class="col-md-6">
          <img src="{{ asset("assets/$bungas->photo_bunga") }}" width="450px" alt="...">
          </div>
          <div class="col-md-6">
          <h2> {{ $bunga->nama_bunga }}</h2>
          <p><strong>Harga :</strong> Rp. {{number_format( $bunga->harga) }}</p>
          <p><strong> Keterangan: </strong></br>
          {{$bunga->keterangan}}
          </p>
          <tr>
          <td>Quantity:</td>
          <td>
          <form  method="post" action="{{ url('pesan') }}/{{ $bunga->id }}">
          @csrf
          <input class="form-control" name="jumlah_pesan" type="number">
          <button type="submit"  class="btn btn-primary mt-2">Add to Cart</button>
          </td></tr>
          </br></br>
        
         </div>
        </div>
      </div>
    </div>
</div>
</div>
  </div>

@endsection
