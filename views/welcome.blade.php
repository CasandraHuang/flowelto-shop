@extends('layouts.app')

@section('content')
<h1 class="text-center font-italic">Wellcome to Flowelto Shop!</h1>
<h3 class="text-center ">The Best Flower Shop in Binus University </h1>

<div class="d-flex justify-content-center">
<div class="col-md-4">
            <div class="card" style="width: 300px;background:pink;">
                <img src="{{ 'assets/W1.jpg'}}" alt="" style="width:300px;height:290px;"> <br/>
                <ul > <strong><a href="/handmade"> Hand Made Bouquet(Gift)</a><strong> </ul>
                </div>
                <div class="card" style="width: 300px;background:pink;">
                <img src="{{ 'assets/H1.jpg'}}" alt="" style="width:300px;height:290px;"> <br/>
                <ul style="center"> <a href="/Wedding"> Wedding's Bouquet(Gift)</a> </ul>
            </div>
            </div>
    </div>

   
@endsection
