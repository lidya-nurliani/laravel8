@extends('layouts.app')
@section('content')

<div class="content">
    <div class="card">
    <div class="card-body">
    {!! Form::open(['route' => 'luas.store']) !!}
        <div class="body m-10">
            <div class="form-group">
            {!! Form::label('tahun', 'Tahun'); !!}
            {!! Form::text('tahun', '',['class' => 'form-control','placeholder'=>'tahun']); !!}
        </div>

        <div class="form-group">
        {!! Form::label('kecamatan_id', 'Kecamatan_id'); !!}
        {!! Form::textarea('kecamatan_id', '',['class' => 'form-control','placeholder'=>'kecamatan_id']); !!}
        </div>

        <div class="form-group">
        {!! Form::label('tanaman_perkebunan_id', 'Tanaman_perkebunan_id'); !!}
        {!! Form::textarea('tanaman_perkebunan_id', '',['class' => 'form-control','placeholder'=>'tanaman_perkebunan_id']); !!}
        </div>

        <div class="form-group">
        {!! Form::label('nilai', 'Nilai'); !!}
        {!! Form::textarea('nilai', '',['class' => 'form-control','placeholder'=>'nilai']); !!}
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{!! route('luas.index') !!} " class="btn btn-danger">cancel</a>
    </div>
    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection