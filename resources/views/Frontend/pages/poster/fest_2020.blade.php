@extends('Frontend.master')

@section('title')
    2020 | Festivals Gallery
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') 2020 Festivals Gallery @endsection

@section('content')

    @include('Frontend.layouts.__breadcrumb')

    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Festivals Gallery</span>
                <h2>2020</h2>
            </div>

            <div class="row">
                <h2 class="">No Poster Found</h2>
            </div>
        </div>
    </section>

@endsection
