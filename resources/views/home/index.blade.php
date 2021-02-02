@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@section('title',$setting->title)

@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)

@section('sidebar')
    @parent
    parent sidebar
@endsection

@section('content')
    @include('home._slide')
@endsection
