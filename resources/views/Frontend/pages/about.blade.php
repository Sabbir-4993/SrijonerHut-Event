@extends('Frontend.master')

@section('title')
    About | Srijoner Hut
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') About Srijoner Hut @endsection


@section('content')
    @include('Frontend.layouts.__breadcrumb')

    @include('Frontend.component.about')

    @include('Frontend.component.counter')

    @include('Frontend.component.history')

    @include('Frontend.component.performers')

    @include('Frontend.component.newsletter')

@endsection
