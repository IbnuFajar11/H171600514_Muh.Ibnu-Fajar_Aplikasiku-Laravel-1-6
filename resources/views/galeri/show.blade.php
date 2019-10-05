@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Galeri</div>

                <div class="card-body">
                   
                   <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">ID</label>
                        <label class="col-md-4 col-form-label text-md-left">{!! $Galeri ->id !!}</label>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Judul</label>
                        <label class="col-md-4 col-form-label text-md-left">{!! $Galeri ->nama !!}</label>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Keterangan</label>
                        <label class="col-md-4 col-form-label text-md-left">{!! $Galeri ->keterangan !!}</label>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">User id</label>
                        <label class="col-md-4 col-form-label text-md-left">{!! $Galeri ->users_id !!}</label>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Create</label> 
                        <label class="col-md-4 col-form-label text-md-left">{!! $Galeri ->created_at !!}</label>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Update</label>
                        <label class="col-md-4 col-form-label text-md-left">{!! $Galeri ->updated_at !!}</label>
                      </div>

                      <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                      <a href="{!! route('galeri.index')!!}" class="btn btn-success">Back</a>
                    </div>
                  </div>
                </div>
              </div>
                </div>
            </div>
        </div>
@endsection

