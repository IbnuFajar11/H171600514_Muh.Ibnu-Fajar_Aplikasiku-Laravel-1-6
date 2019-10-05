@extends('Layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Galeri</div>

                    <div class="card-body">
                        <form method="post" action="{!! route('galeri.store') !!}">
                            @include('galeri.form')


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
   <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

    <script>
        $(document).ready(function() {

                CKEDITOR.replace( 'keterangan' );
        });
    </script>
@endsection