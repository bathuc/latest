@extends('layouts.bootstrap')

@section('content')
    <form method="post">
        {{ csrf_field() }}
        <textarea  name="text" rows="6" class="form-control mb-2"></textarea>
        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
    </form>
@endsection