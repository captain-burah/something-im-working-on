@extends('layoutv2.master')

@section('luxe_asset_css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

    <style>
        .iti {
            width: 100% !important;
        }
        .iti__flag-container{
            overflow: visible;
        }
    </style>
@endsection

@section('content')

<?php
    $id = $response['id'];
    $title = $response['title'];
    $titlear = $response['title_ar'];
    $sluglink = $response['slug_link'];
    $thumbnail = $response['thumbnail'];
    $description = $response['description'];
    $header_image = $response['header_image'];
    $images = $response['website_construction_images'];
?>
    
        <section>
             @include('constructions_details.mobile.header')
        </section>
        <section>
            @include('constructions_details.mobile.body')
        </section>

@endsection




@section('luxe_asset_js')

    @yield('intel-input')

@endsection


