@extends('layouts.guest')

@section('content')
    @include('components.website.loader')
    <!-- OUTER BG WRAPPER -->
    <div class="bg-outer-wrapper position-relative float-left w-100 background-f7f9ff">
        @include('components.website.page-header')
        @include('components.website.page-menu-header')
    </div>

    @include('components.website.full-menu')
    @include('components.website.testimonials')
    @include('components.website.reserve-table')
    @include('components.website.footer')
@endsection
