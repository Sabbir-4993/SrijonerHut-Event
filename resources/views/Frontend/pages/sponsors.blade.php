@extends('Frontend.master')

@section('title')
    Sponsors | Srijoner Hut
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') Offcial Sponsors @endsection



@section('content')
    @include('Frontend.layouts.__breadcrumb')

    @include('Frontend.component.clients')

    @include('Frontend.component.newsletter')

@endsection
