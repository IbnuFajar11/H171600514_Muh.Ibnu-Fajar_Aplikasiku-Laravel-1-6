@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Kategori Artikel</div>

                <div class="card-body">

                	<a href="{!! route('kategori_artikel.create') !!}" class="btn btn-success">Tambah Data</a>
                	 <p>
                       </p>
                   <table class="table table-bordered">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Judul</thh>
			<th scope="col">Users Id</th>
			<th scope="col">Create</th>
			<th scope="col">Update</th>
			<th scope="col">Aksi</th>
		</tr>

		@foreach($listKategoriArtikel as $item)

		<tr>
			<td>{!! $item->id !!}</td> 
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->users_id !!}</td> 
			<td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
			<td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
			<td>
				<a href="{!! route('kategori_artikel.show',[$item->id]) !!}" class="btn btn-sm btn-success">Lihat
				</a>
				<p></p>
				<a href="{!! route('kategori_artikel.edit',[$item->id]) !!}" class="btn btn-sm btn-primary">Ubah
				</a>

				<p></p>

				{!! Form::open(['route' => ['kategori_artikel.destroy', $item->id], 'method'=>'delete']) !!}

				{!! Form::submit('Hapus', ['class' => 'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah Kamu Yakin Ingin Menghapus Data Ini ?')"]); !!}

				{!! Form::close() !!}

			</td>
		</tr>

		@endforeach
	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
