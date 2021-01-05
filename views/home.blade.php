@extends('layouts.app')

@section('content')
<h1 class="text-center font-italic">Welcome to Flowelto Shop!</h1>
<h3 class="text-center ">The Best Flower Shop in Binus University </h1>

<div class="container">
<div class="row justify-content-center">
@foreach($title as $t)
    <div class="card" style="style=width: 18rem;">
        <img src="{{ "assets/$t->photo" }}" alt="" style="width:300px;height:290px;"> <br/>
            <ul > <strong><a href="{{ url('handmade') }}/{{ $t->id }}"> {{ $t->title_bunga }}</a><strong> </ul>
            @can('isManager')
            <a href="/home/{{$t->id}}/edit" class="btn btn-primary">Update Category</a>
            <form action="/home/{{$t->id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete Category</button>
            </form>
            @endcan
    </div>
@endforeach
</div>
</div>
@endsection
