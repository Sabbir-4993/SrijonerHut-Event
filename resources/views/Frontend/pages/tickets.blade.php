@extends('Frontend.master')

@section('title')
    Tickets | Srijoner Hut
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') Tickets & Passes @endsection


@section('content')
    @include('Frontend.layouts.__breadcrumb')

    @include('Frontend.component.ticket')

    @include('Frontend.component.newsletter')

@endsection
