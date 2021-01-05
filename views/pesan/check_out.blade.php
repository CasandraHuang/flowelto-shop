@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">
<div class="row">
          
    <div class="card-body">
    <h3>My Cart</h3>
    @if(!empty($pesanan))
    <p align="right">Transaction history : {{ $pesanan->tanggal }}</p>
        <table class="table table-bordered">
        <tbody>
            <tr>

                <th>No.</th>
                <th>Photo</th>
                <th>Your Bouquet</th>
                <th>Total</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Delete?</th>
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
                <th>
                  <form action="{{ url('check_out') }}/{{ $pd->id }}" method="post">
                  @csrf
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger btn-5m">Delete</button>
                  </form>
                </th>
            </tr>
        @endforeach
        <tr>
            <td colspan="4"><strong>Total Price</strong></td>
            <td><strong>Rp. {{number_format($pesanan->jumlah_harga)}}</strong></td>
            <td>
                <a href="{{ url('konfirmasi-check_out') }}" class="btn btn-success">Check Out</a>
            </td>

        </tr>
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
