@extends('layout.v_template')
@section('title','User')

@section('content')
<a href="/guru/add" class="btn btn-primary btn-sm">Add</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Guru</th>
            <th>Mata Pelajaran</th>
            <th>Foto Guru</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($guru as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->nip}}</td>
            <td>{{$data->nama_guru}}</td>
            <td>{{$data->mapel}}</td>
            <td><img src="{{url('foto_guru/'.$data->foto_guru)}}" width="100px"></td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
