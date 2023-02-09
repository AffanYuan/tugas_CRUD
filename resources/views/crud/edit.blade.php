@extends('template')

@section('content')
    <h1>Edit Data</h1>
        <a href="/crud" class="btn btn-primary btn-sm mb-3">Kembali</a>
        <form action="/crud/{{$siswa->id}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$siswa->nama}}">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label for="">Umur</label>
                        <input type="text" class="form-control" name="umur" value="{{$siswa->umur}}">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label for="">Kelas</label>
                        <input type="text" class="form-control" name="kelas" value="{{$siswa->kelas}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </form>
@endsection