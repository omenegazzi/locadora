@extends('adminlte::page')

@section('title', 'MediaType - View')

@section('content_header')
    <h1>MediaType</h1>
@stop

@section('content')
    <div class="col-md-9">
        <a href="{{ url('/admin/media-types') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <a href="{{ url('/admin/media-types/' . $mediatype->id . '/edit') }}" title="Edit MediaType"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('admin/mediatypes' . '/' . $mediatype->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-sm" title="Delete MediaType" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>

        <br/><br/>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $mediatype->id }}</td>
                    </tr>
                    <tr><th> Name </th><td> {{ $mediatype->name }} </td></tr><tr><th> Price </th><td> {{ $mediatype->price }} </td></tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
