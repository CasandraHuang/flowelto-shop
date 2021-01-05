@extends('layouts.app')

@section('link-style')
<link rel="stylesheet" href="/css/create-shoe-style.css">
@endsection

@section('content')
    <div class="container">
        <div class="flower-data-section">
            <div class="create-flower-section">
                <form action="/handmade" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="text-center">
                        <h1>Add New Flower</h1>
                    </div>

                    <div class="form-group row mt-4">
                        <label for="title" class="col-md-4 col-form-label">Category</label>

                        <select type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                            @foreach ($title as $t)
                                <option value="{{$t->id}}">{{$t->title_bunga}}</option>
                            @endforeach
                        </select>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="form-group row mt-4">
                        <label for="nama_bunga" class="col-md-4 col-form-label">Flower Name</label>

                        <input type="text" id="nama_bunga" class="form-control @error('nama_bunga') is-invalid @enderror" name="nama_bunga" value="{{ old('nama_bunga') }}">

                        @error('nama_bunga')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="form-group row">
                        <label for="harga" class="col-md-4 col-form-label">Flower Price</label>

                        <input type="number" id="harga" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}" name="harga" value="{{ old('harga') }}">

                        @error('harga')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="keterangan" class="col-md-4 col-form-label">Description</label>

                        <input type="text" id="keterangan" class="form-control{{ $errors->has('keterangan') ? ' is-invalid' : '' }}" name="keterangan" value="{{ old('keterangan') }}">

                        @if ($errors->has('keterangan'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="row">
                        <label for="photo_bunga" class="col-md-4 col-form-label">Flower Image</label>

                        <input type="file" class="form-control-file" id="photo_bunga" name="photo_bunga">

                        @if ($errors->has('photo_bunga'))
                            <strong>{{ $errors->first('image') }}</strong>
                        @endif
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
