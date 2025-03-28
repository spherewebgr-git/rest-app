@extends('layouts.guest')

@section('content')
    @include('components.website.loader')
    <!-- OUTER BG WRAPPER -->
    <div class="bg-outer-wrapper position-relative float-left w-100 background-f7f9ff">
       @include('components.website.page-header')
       @include('components.website.home-slider')
    </div>
    @include('components.website.menu-categories')
    @include('components.website.our-menu')
    @include('components.website.testimonials')
    @include('components.website.reserve-table')
    @include('components.website.footer')
@endsection
