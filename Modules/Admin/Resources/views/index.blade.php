@extends('admin::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('admin.name') !!}
    </p>
    <a href="{{ route('admin.auth.logout') }}" title="" class="btn btn-primary">Logout</a>
@endsection
