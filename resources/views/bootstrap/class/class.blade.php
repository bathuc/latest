@extends('layouts.bootstrap')

@section('content')
    <h3 class="heading"># breakpoint</h3>
    <div class="desc">
        <p><span class="text-red">xs</span>(default), <span class="text-red">sm</span>, <span class="text-red">md</span>, <span class="text-red">lg</span>, <span class="text-red">xl</span></p>
    </div>

    <h3 class="heading"># spacing</h3>
    <div class="desc">
        <p><span class="text-red">m</span>, <span class="text-red">p</span></p>
        <p><span class="text-red">t</span>, <span class="text-red">r</span>, <span class="text-red">b</span>, <span class="text-red">l</span>, <span class="text-red">x</span>, <span class="text-red">y</span>, blank</p>
        <p>(<span class="text-red">n</span>), <span class="text-red">0</span>, <span class="text-red">1</span>, <span class="text-red">2</span>, <span class="text-red">3</span>, <span class="text-red">4</span>, <span class="text-red">5</span>, <span class="text-red">auto</span></p>
    </div>

    <h3 class="heading"># sizing</h3>
    <div class="desc">
        <p><span class="text-red">w</span>, <span class="text-red">h</span> - <span class="text-red">25</span>, <span class="text-red">50</span>, <span class="text-red">75</span>, <span class="text-red">100</span>, <span class="text-red">auto</span></p>
        <p><span class="text-red">mw-100</span>, <span class="text-red">mh-100</span></p>
        <p>viewport: <span class="text-red">vw-100</span>, <span class="text-red">vh-100</span>, <span class="text-red">min-vw-100</span>, <span class="text-red">min-vh-100</span></p>
        <p>text-size: class <span class="text-red">h1</span> -> <span class="text-red">h5</span></p>
    </div>
@endsection

{{-- <span class="text-red"></span>  --}}