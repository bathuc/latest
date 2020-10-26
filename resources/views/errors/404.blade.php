@extends('layouts.error')

@section('title', __('Page Not Found'))
@section('code', '404')

@section('message')
    <h2 class="text-dark">Ooops!!</h2>
    <h2 class="text-dark" style="font-weight: 300">PAGE NOT FOUND.</h2>
    <h4 class="text-dark" style="font-weight: 300">
        The page you're looking for doesn't exist or unavailable.
    </h4>

    <a href="{{ route('home') }}" class="btn btn-primary mt-5">
        <i class="fa fa-home"></i>
        Go back to home
    </a>
@endsection
