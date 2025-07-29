@extends('Frontend.master')

@section('title')
    About | Event
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') Nakshikanther Chobi @endsection


@section('content')
    @include('Frontend.layouts.__breadcrumb')

    @include('Frontend.component.nakshikantha')

    @include('Frontend.component.newsletter')

@endsection
