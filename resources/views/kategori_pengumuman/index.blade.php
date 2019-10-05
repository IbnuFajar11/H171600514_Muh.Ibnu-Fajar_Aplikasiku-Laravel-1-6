@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Pengumuman</div>

                <div class="card-body">
                		<a href="{!! route('kategori_pengumuman.create') !!}" class="btn btn-success">Tambah Data</a>
                		 <p>
                       </p>
                    <table class="table table-bordered">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Nama</thh>
			<th scope="col">Users Id</th>
			<th scope="col">Create</th>
			<th scope="col">Update</th>
			<th scope="col">Aksi</th>
		</tr>

		@foreach($listKategoriPengumuman as $item)

		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->users_id !!}</td> 
			<td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
			<td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
			<td>
				<a href="{!! route('kategori_pengumuman.show',[$item->id]) !!}" class="btn btn-sm btn-success">Lihat
				</a>
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
