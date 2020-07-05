@extends('layouts.master')

@section('title','Detail Artikel')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Detail Artikel</h1>

<h1 class="h4 text-gray-800">Judul : {{ $item->judul }}</h1>
<small>slug : {{$item->slug}} </small>
<br>
<div class="text-white">
    @php
    $tags = $item->tag;
    $tags = explode(',', $tags);
    @endphp
    @foreach($tags as $tag)
    <a class="btn btn-success">{{$tag}} </a>
    @endforeach
</div>

<p class="text-dark mt-4" style="font-size: 1.5em;">{{ $item->isi }}</p>


@endsection