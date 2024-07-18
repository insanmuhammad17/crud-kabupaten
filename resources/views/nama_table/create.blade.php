@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Tambah Data</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops!</strong> Ada beberapa masalah dengan inputan Anda.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('nama_table.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="judul">judul:</label>
                    <input type="text" name="judul" class="form-control" placeholder="judul">
                </div>
                <div class="form-group">
                    <label for="artikel">artikel:</label>
                    <input type="text" name="artikel" class="form-control" placeholder="artikel">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
