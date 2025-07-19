@extends('Frontend.master')

@section('title')
    Video | Srijoner Hut
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') Video @endsection

@section('content')

    @include('Frontend.layouts.__breadcrumb')

    @include('Frontend.component.video_gallery')

@endsection
