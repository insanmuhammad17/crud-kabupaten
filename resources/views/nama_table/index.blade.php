@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="table-responsive">
            <p style='font-weight:bold;text-align:center;top:auto; font-size: 30px;'>
                Artikel
            </p>
            <a href="{{ route('nama_table.create') }}" class="btn btn-primary">Tambah Data</a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="table-responsive">
                <table class='table table-hover'>
                    <thead class='table-primary'>
                        <th>No</th>
                        <th>Judul Artikel</th>
                        <th>Artikel</th>
                    </thead>
                <tbody>
                    @foreach ($data as $key => $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $value->judul }}</td>
                        <td>{{ $value->artikel }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
