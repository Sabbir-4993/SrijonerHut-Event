@extends('Frontend.master')

@section('title')
    Gallery | Srijoner Hut
@endsection

@section('bg') {{asset('assets/images/background/5.jpg')}} @endsection

@section('page_name') Gallery @endsection

@section('content')

    @include('Frontend.layouts.__breadcrumb')

    @include('Frontend.component.all_gallery')

    @include('Frontend.component.newsletter')
@endsection

@section('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const galleryRow = document.getElementById('galleryRow');

            fetch('{{ asset('assets/js/gallery-data.json') }}')
                .then(response => response.json())
                .then(galleryData => {
                    const sortedYears = Object.keys(galleryData).sort((a, b) => b - a);

                    sortedYears.forEach(year => {
                        const images = galleryData[year];

                        images.forEach(image => {
                            const imageBox = document.createElement('div');
                            imageBox.className = 'gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn';

                            imageBox.innerHTML = `
                        <div class="image-box">
                            <figure class="image">
                                <img src="{{ asset('assets/images/gallery/${year}/${image.filename}') }}" alt="${image.alt}">
                            </figure>
                            <div class="overlay-box">
                                <a href="{{ asset('assets/images/gallery/${year}/${image.filename}') }}" class="lightbox-image" data-fancybox='gallery'>
                                    <span class="icon fa fa-expand-arrows-alt"></span>
                                </a>
                            </div>
                        </div>
                    `;

                            galleryRow.appendChild(imageBox);
                        });
                    });
                })
                .catch(error => {
                    console.error('Error fetching gallery data:', error);
                });
        });
    </script>


@endsection
