@extends('adminlte::page')

@section('title', 'MediaType - New')

@section('content_header')
    <h1>New MediaType</h1>
@stop

@section('content')
    <div class="col-md-9">
        <a href="{{ url('/admin/media-types') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        
        <br /><br />

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ url('/admin/media-types') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include ('admin.media-types.form', ['formMode' => 'create'])

        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
