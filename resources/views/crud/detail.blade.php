@extends('template')

@section('content')
    <h1>Detail Siswa</h1>
        <a href="/crud" class="btn btn-primary btn-sm mb-2">Kembali</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <td>{{$siswa->nama}}</td>
                    </tr>
                    <tr>
                        <th>Umur</th>
                        <td>{{$siswa->umur}}</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>{{$siswa->kelas}}</td>
                    </tr>
                </table>
            </div>
        </div>
@endsection