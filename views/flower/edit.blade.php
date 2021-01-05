@extends('layouts.app')

@section('link-style')
<link rel="stylesheet" href="/css/edit-flower-style.css">
@endsection

@section('content')
<div class="container">
    <div class="flower-section">
        <div class="edit-section">
            <form action="/handmade/{{ $bungas->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row edit-flower-image mt-4">
                    <img src="{{ asset("assets/$bungas->photo_bunga") }}">
                </div>

                <div class="form-group row mt-4">
                        <label for="title_bunga" class="col-md-4 col-form-label">Category</label>

                        <select type="text" id="title_bunga" class="form-control @error('title_bunga') is-invalid @enderror" name="title_bunga" value="{{ old('title_bunga') ?? $bungas->title_bunga }}">
                            @foreach ($title as $t)
                            <option value="{{$t->id}}">{{$t->title_bunga}}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('title_bunga'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title_bunga') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row mt-4">
                    <label for="nama_bunga" class="col-md-4 col-form-label">Flower Name</label>

                    <input type="text" id="nama_bunga" class="form-control{{ $errors->has('nama_bunga') ? ' is-invalid' : '' }}" name="nama_bunga" value="{{ old('nama_bunga') ?? $bungas->nama_bunga}}">

                    @if ($errors->has('nama_bunga'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nama_bunga') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="harga" class="col-md-4 col-form-label">Flower Price (Rupiah)</label>

                    <input type="number" id="harga" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}" name="harga" value="{{ old('harga') ?? $bungas->harga}}">

                    @if ($errors->has('harga'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('harga') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="keterangan" class="col-md-4 col-form-label">Description</label>

                    <input type="textarea" id="keterangan" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="keterangan" value="{{ old('keterangan') ?? $bungas->keterangan}}">

                    @if ($errors->has('keterangan'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('keterangan') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <label for="photo_bunga" class="col-md-4 col-form-label">Image</label>

                    <input type="file" class="form-control-file" id="photo_bunga" name="photo_bunga">

                    @if ($errors->has('photo_bunga'))
                        <strong>{{ $errors->first('photo_bunga') }}</strong>
                    @endif
                </div>

                <input type="hidden" name="oldImage" value="{{$bungas->photo_bunga}}">

                <div class="row pt-4">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>

                <input type="hidden" name="stok" value="{{$bungas->stok}}">
            </form>
        </div>
    </div>
</div>
@endsection
