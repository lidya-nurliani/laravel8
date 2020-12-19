@extends('layouts.app')
@section('content')

<div class="content">
    <div class="card">
    <div class="card-body">
    {!! Form::open(['route' => 'kecamatan.store']) !!}
        <div class="body m-10">
            <div class="form-group">
            {!! Form::label('nama', 'Nama'); !!}
            {!! Form::text('nama', '',['class' => 'form-control','placeholder'=>'nama']); !!}
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{!! route('kecamatan.index') !!} " class="btn btn-danger">cancel</a>
    </div>
    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection