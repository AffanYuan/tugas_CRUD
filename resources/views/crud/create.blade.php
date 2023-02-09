@extends('template')

@section('content')
    <h1>Tambah Data</h1>
    <a href="/crud" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <form action="/crud" method="post">
        @csrf
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Umur</label>
                    <input type="text" class="form-control" name="umur">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Kelas</label>
                    <input type="text" class="form-control" name="kelas">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </form>
@endsection