@extends('layouts.master')

@section('title','Tambah Artikel')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Tambah Data</h1>
<br><br>

<form action="{{ url('/artikel') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="judul">Judul</label>
        <input name="judul" type="text" class="form-control" id="judul">
    </div>
    <div class="form-group">
        <label for="isi">Isi</label>
        <textarea name="isi" id="isi" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="tag">Tag</label>
        <input name="tag" type="text" class="form-control" id="tag" placeholder="pisahkan dengan tanda koma">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>


@endsection