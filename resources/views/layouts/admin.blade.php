@extends('layouts.index')

@section('body-class', 'bg-light')

@section('body')
    <div class="admin-wrapper d-flex">
        @include('layouts.admin.sidebar')
        <div class="w-100">
            @include('layouts.admin.top-bar')
            <div class="admin-content container-fluid bg-white pt-2">
                @yield('content')
            </div>
        </div>
    </div>
@endsection
