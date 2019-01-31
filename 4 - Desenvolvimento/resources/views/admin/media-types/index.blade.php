@extends('adminlte::page')

@section('title', 'Mediatypes')

@section('content_header')
    <h1>Mediatypes</h1>
@stop

@section('content')
<a href="{{ url('/admin/media-types/create') }}" class="btn btn-success btn-sm" title="Add New MediaType">
    <i class="fa fa-plus" aria-hidden="true"></i> Add New
</a>
<form method="GET" action="{{ url('/admin/media-types') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search" style="display: inline-flex;">
    <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
</form>

<br/><br/>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Name</th><th>Price</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mediatypes as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td><td>{{ $item->price }}</td>
                <td>
                    <a href="{{ url('/admin/media-types/' . $item->id) }}" title="View MediaType"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                    <a href="{{ url('/admin/media-types/' . $item->id . '/edit') }}" title="Edit MediaType"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                    <form method="POST" action="{{ url('/admin/media-types' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete MediaType" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $mediatypes->appends(['search' => Request::get('search')])->render() !!} </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
