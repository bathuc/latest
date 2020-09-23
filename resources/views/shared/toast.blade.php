@php($needToCallToastJs = false)
@if (session()->has('success'))
    <div class="toast fade show" style="position: fixed; bottom: 0; right: 0; z-index: 99;">
        <div class="toast fade show" data-autohide="false">
            <div class="toast-header">
                <strong class="mr-auto text-success">Message</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
                {!! session()->get('success') !!}
            </div>
        </div>
    </div>
    @php($needToCallToastJs = true)
@endif

@if (isset($errors) && $errors->any())
    <div class="toast fade show" style="position: fixed; bottom: 0; right: 0; z-index: 99;">
        <div class="toast fade show" data-autohide="false">
            <div class="toast-header">
                <strong class="mr-auto text-danger">Message</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        </div>
    </div>
    @php($needToCallToastJs = true)
@endif

@if ($needToCallToastJs)
    @push('scripts')
        <script>
            $(document).ready(function(){
                $('.toast').toast();
            });
        </script>
    @endpush
@endif
