@extends('layouts.master')

@section('content')
<h1 class="header__title">Photos</h1>

<a href=" {{ route('gallery.add_photo') }} " class="btn">Upload Image</a>

@foreach($photos as $photo)
<div class="gallery">
    <div class="gallery__container">
        <div class="gallery__photos">
            <h2>{{asset('photos/'.$photo->title)}}</h2>
            <img class="gallery__photos" src="{{ asset('photos/'.$photo->photo)}}"/>
            <p>{{asset('photos/'.$photo->description)}}</p>
        </div>
    </div>
</div>
@endforeach



@endsection
