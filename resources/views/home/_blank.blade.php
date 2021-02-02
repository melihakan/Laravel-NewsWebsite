@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@section('title',$setting->title)

@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)
@section('content')
<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            İçerik alanı
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
@endsection
