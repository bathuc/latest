require('../sass/app.scss');
require('bootstrap-datepicker/dist/css/bootstrap-datepicker.standalone.min.css');

global.$ = global.jQuery = require('jquery');
global.Popper = require('popper.js').default;
global.Cookies = $.cookie = global.Cookies = require('js-cookie');

require('lazysizes');
require('bootstrap');
require('bootstrap-datepicker');
require('parsleyjs');

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

import moment from 'moment';
global.moment = moment;

$('.datepicker').datepicker({format: 'yyyy-mm-dd'});

global.select2 = require('select2');

$(document).ready(function() {
    $('.js-select2').select2();
});
