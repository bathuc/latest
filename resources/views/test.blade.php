@extends('layouts.bootstrap')

@section('content')
    <form method="post">
        {{ csrf_field() }}
        <input name="currency" type="text" class="form-control js-currency-input">
        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
    </form>
@endsection

@push('scripts')
    <script>
        // This is for global use - you can put it at layouts.default
        window.initCurrencyInput = function ($elements) {
            $elements.each((index, currencyInput) => {
                let $currencyInput = $(currencyInput);

                if ($currencyInput.hasClass('js-currency-input-initialized')) {
                    return;
                }

                $currencyInput.addClass('js-currency-input-initialized');

                new Cleave(currencyInput, { // Doc: https://github.com/nosir/cleave.js/blob/master/doc/options.md#numeral
                    numeral: true,
                    numeralThousandsGroupStyle: 'thousand',
                    numeralDecimalScale: 2,
                });
            });
        }

        initCurrencyInput($('.js-currency-input'));
    </script>
@endpush
