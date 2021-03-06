@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Form Pengumuman</div>
                <div class="card-body">
                    <a href="{!! route('pengumuman.create') !!}" class="btn btn-success">Tambah Data</a>
                       <p>
                       </p>
                <table class="table table-bordered">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Users Id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Update</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    <tbody>

                        @foreach( $listPengumuman as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td> 
                        <td>{!! $item->kategori_pengumuman_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
                        <td>
                         <a href="{!! route('pengumuman.show',[$item->id]) !!}"class="btn btn-success">Lihat</a>
                           <p></p>
                         <a href="{!! route('pengumuman.edit',[$item->id]) !!}" class="btn btn-sm btn-primary">Ubah</a>

                        <p></p>

                        {!! Form::open(['route' => ['pengumuman.destroy', $item->id], 'method'=>'delete']) !!}

                        {!! Form::submit('Hapus', ['class' => 'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah Kamu Yakin Ingin Menghapus Data Ini ?')"]); !!}

                        {!! Form::close() !!}
                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection