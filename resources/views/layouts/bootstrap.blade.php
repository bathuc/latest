@extends('layouts.index')

@section('body-class', 'document')

@section('body')
    {{-- nav bar--}}
    <div class="container-fluid bg-dark">
        <div class="container d-flex justify-content-between align-items-center">
            <span class="text-white my-3">Project Name</span>
            <div></div>
        </div>
    </div>

    <div class="main-wrapper row">
        {{--side bar--}}
        <div class="col-2 pt-3 overflow-auto" style="background-color: #F9F9FC; height: calc(100vh - 56px - 1rem)">
            <ul class="sidebar pl-4">
                <li>
                    <h5 class="font-weight-bold">Utility</h5>
                    <ul>
                        <li><a href="{{ route('bootstrap.class') }}" class="text-dark">Class</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-10 pt-3 pl-5">
            @yield('content')
        </div>
    </div>

    <style>
        ul, li {
            list-style: none;
        }

        .sidebar ul {
            padding-left: 20px;
        }
    </style>
@endsection
