@extends('layouts.master')

@section('title','Artikel')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Artikel</h1>


<a href="{{ url('/artikel/create') }}" class="btn btn-primary">Tambah Artikel</a>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Tag</th>
            <th scope="col">User Id</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->tag }}</td>
            <td>{{ $item->user_id }}</td>
            <td>
                <a class="btn btn-primary" href="{{ url('/artikel/' . $item->id) }}">Show</a>
                <a class="btn btn-warning" href="{{ url('/artikel/' . $item->id . '/edit') }}"><i class="fas fa-edit"></i></a>
                <form action="{{ url('/artikel/' . $item->id) }}" method="post" style="display: inline;">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush