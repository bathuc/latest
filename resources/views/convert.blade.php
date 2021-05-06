@extends('layouts.bootstrap')

@section('content')
    <form method="post">
        {{ csrf_field() }}
        <textarea  name="convert_text" rows="5" class="form-control col-10">{{ old('convert_text', request()->convert_text) }}</textarea>
        <button type="submit" class="btn btn-primary btn-submit mt-3">Submit</button>
    </form>

    <pre class="mt-3">{!! $convertText !!}</pre>
@endsection
