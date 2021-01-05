@extends('layouts.app')

@section('link-style')
<link rel="stylesheet" href="/css/edit-flower-style.css">
@endsection

@section('content')
<div class="container">
    <div class="title-data-section">
        <div class="edit-title-section">
            <form action="/home/{{ $titles->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row edit-flower-image mt-4">
                    <img src="{{ asset("assets/$titles->photo") }}">
                </div>

                <div class="form-group row mt-4">
                    <label for="title_bunga" class="col-md-4 col-form-label">Category Name</label>

                    <input type="text" id="title_bunga" class="form-control{{ $errors->has('title_bunga') ? ' is-invalid' : '' }}" name="title_bunga" value="{{ old('title_bunga') ?? $titles->title_bunga}}">

                    @if ($errors->has('title_bunga'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title_bunga') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <label for="photo_bunga" class="col-md-4 col-form-label">Category Image</label>

                    <input type="file" class="form-control-file" id="photo_bunga" name="photo_bunga">

                    @if ($errors->has('photo_bunga'))
                        <strong>{{ $errors->first('photo_bunga') }}</strong>
                    @endif
                </div>

                <input type="hidden" name="oldImage" value="{{$titles->photo}}">

                <div class="row pt-4">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
