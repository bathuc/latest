@extends('layouts.index')

@section('body')
    <div class="container-fluid bg-dark">
        <div class="container">
            <span class="text-white">Project Name</span>
            <div class="login-bar">
                <form id="frmForm" method="post">
                    @csrf
                    <input id="email" name="email" type="text" class="form-control" placeholder="Email">
                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                    <button type="submit" class="btn btn-success">Sign In</button>
                </form>
            </div>
        </div>
    </div>
@endsection