@extends('layouts.master')

@section('title','Edit Artikel')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Tambah Data</h1>
<br><br>

<form action="{{ url('/artikel/' . $item->id) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input name="judul" type="text" class="form-control" id="judul" value="{{ $item->judul }}">
    </div>
    <div class="form-group">
        <label for="isi">Isi</label>
        <textarea name="isi" id="isi" cols="30" rows="10" class="form-control">{{ $item->isi }}</textarea>
    </div>
    <div class="form-group">
        <label for="tag">Tag</label>
        <input name="tag" type="text" class="form-control" id="tag" value="{{ $item->tag }}" placeholder="pisahkan dengan tanda koma">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>


@endsection