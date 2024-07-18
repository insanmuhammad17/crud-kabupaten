@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Artikel</h2>
            <a href="{{ route('nama_table.create') }}" class="btn btn-primary">Tambah Data</a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered mt-2">
                <tr>
                    <th>No</th>
                    <th>Judul Artikel</th>
                    <th>Artikel</th>
                </tr>
                @foreach ($data as $key => $value)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $value->judul }}</td>
                    <td>{{ $value->artikel }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
