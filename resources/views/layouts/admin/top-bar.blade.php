<div class="top-bar bg-primary w-100">
    <div class="container-fluid d-flex justify-content-between align-items-center h-100">
        <h5 class="m-0 text-white font-weight-bold">@yield('title', 'Dashboard')</h5>
        <span class="text-white">Hi, {{ auth()->user()->name ?? 'Thuc' }}</span>
    </div>
</div>