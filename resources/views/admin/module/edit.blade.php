@extends('layouts.admin.app')
@section('title', 'Module')
@section('content')

    <div class="container-fluid" id="container-wrapper">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit Modul</h2>
                    </div>
                </div>
            </div>


            <div class="card mb-4">
                <div class="col-lg-12 mt-4">
                    <form action="{{ route('module.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Judul</label>
                                    <input type="text" name="judul_modul" value="{{ $data->judul_modul }}"
                                        class="form-control" placeholder="Judul">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Deskripsi</strong>
                                    <textarea type="text" name="deskripsi_modul" id="deskripsi_modul" class="form-control" placeholder="Deskripsi_modul"
                                        rows="6">{{ $data->deskripsi_modul }}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Upload Modul</label>
                                    <input type="file" class="form-control" name="modul" accept="application/pdf" />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-right mb-3">
                                <a class="btn btn-dark" href="{{ route('module.index') }}"> Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
