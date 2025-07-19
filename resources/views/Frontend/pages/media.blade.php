@extends('Frontend.master')

@section('title')
    About | Media
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') Media & News @endsection


@section('content')
    @include('Frontend.layouts.__breadcrumb')

    @include('Frontend.component.news')

    @include('Frontend.component.newsletter')

@endsection
