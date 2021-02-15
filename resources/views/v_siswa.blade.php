@extends('layout.v_template')
@section('title','Siswa')

@section('content')
<a href="/siswa/print" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-print"></i> Print</a>
<a href="/siswa/printpdf" class="btn btn-sm btn-info" target="_blank"><i class="fas fa-file-pdf"></i> Print PDF (layout ilang!!)</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Mapel</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($siswa as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->nis}}</td>
            <td>{{$data->nama_siswa}}</td>
            <td>{{$data->kelas}}</td>
            <td>{{$data->mapel}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
