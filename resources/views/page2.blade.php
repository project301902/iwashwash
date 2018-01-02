@extends('layouts.main')

@section('title', 'Page Title')

@push('css')
    <style type="text/css">
        
    </style>
@endpush

@section('content')
    Page 2
@endsection

@push('javascripts')
    <script type="text/javascript">
        var app = angular.module('myApp', []);
        app.controller('myController', function($scope,$http, $sce, $window) {
            
        });
    </script>
@endpush