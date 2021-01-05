@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">
<div class="row">
          
    <div class="card-body">
    @if(!empty($pesanan))
    <h3 align="center">My Transaction History : {{ $pesanan->tanggal }}</h3>
        <table class="table table-bordered">
        <tbody>
            <tr>

                <th>No.</th>
                <th>Photo</th>
                <th>Your Bouquet</th>
                <th>Total</th>
                <th>Price</th>
                <th>Total Price</th>
            
            </tr>
        </tbody>
        <tbody>
        <?php $no = 1; ?>
        @foreach($pesanan_details as $pd)
            <tr>

                <th>{{ $no++ }}</th>
                <th> <img src="{{ asset("../../assets/$pd->bunga->photo_bunga") }}" width="45px" alt="..."></th>
                <th>{{ $pd->bunga->nama_bunga }}</th>
                <th>{{ $pd->jumlah }}  Bucket</th>
                <th>Rp. {{ number_format($pd->bunga->harga) }}</th>
                <th>Rp. {{ number_format($pd->jumlah_harga) }}</th>
               
            </tr>
        @endforeach
    
        </tbody>
        </table>
        @endif
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection
