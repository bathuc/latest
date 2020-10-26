@extends('layouts.error')

@section('title', __('Internal Server Error'))
@section('code', '500')

@section('message')
    <h2 class="text-dark">Ooops!!</h2>
    <h2 class="text-dark" style="font-weight: 300">
        SOMETHING WENT WRONG.
    </h2>
    <h4 class="text-dark" style="font-weight: 300">
        We apologise for this problem. Please contact to development team to report this issue.
    </h4>

    <a href="{{ route('home') }}" class="btn btn-primary mt-5">
        <i class="fa fa-home"></i>
        Go back to home
    </a>
@endsection
