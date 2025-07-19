@extends('Frontend.master')

@section('title')
    Schedule | Srijoner Hut
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') Schedule @endsection

@section('content')

@include('Frontend.layouts.__breadcrumb')

@include('Frontend.component.schedule')

<section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Festival Schedule</span>
            <h2>2024</h2>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Film Type</th>
                        <th>Film Name</th>
                        <th>Ticket</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="6">Friday,<br> 1st Aug 2025</td>
                            <td>05:00PM</td>
                            <td>Kick-off Festival</td>
                            <td>-</td>
                            <td rowspan="17">
                                <a href="https://filmfreeway.com/BengaliFilmFestivalofDallas/tickets" title="Festival of Dallas 2024" target="_blank" class="theme-btn btn-style-two"><span class="btn-title">Get Ticket</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>06:00PM</td>
                            <td>Meet - Greet</b></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>07:00PM</td>
                            <td>Red Carpet</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>08:00PM</td>
                            <td>Opening Speach</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>08:30PM</td>
                            <td>Short Film</b></td>
                            <td>Re-Routing by Kankana Charaborty</td>
                        </tr>
                        <tr>
                            <td>10:00PM</td>
                            <td>Feature Film</b></td>
                            <td>Nakshi Kanthar Jamin</td>
                        </tr>
                        <tr>
                            <td rowspan="7">Saturday,<br> 2nd Aug 2025</td>
                            <td>12:00PM</td>
                            <td>Saminar</b></td>
                            <td>Celebrating Mrinal Sen</td>
                        </tr>
                        <tr>
                            <td>02:00PM</td>
                            <td>Short Film</td>
                            <td>The Ruin</td>
                        </tr>
                        <tr>
                            <td>03:00PM</td>
                            <td>Feature Film</td>
                            <td>Bijoyar Pore</td>
                        </tr>
                        <tr>
                            <td>05:00PM</td>
                            <td>Fashion show: </br> Nokshikanthar Chobi</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>06:00PM</td>
                            <td>Dinner</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>08:30PM</td>
                            <td>Short Film</td>
                            <td>The Circle by Mahamudul Hasan Tipu</td>
                        </tr>
                        <tr>
                            <td>10:30PM</td>
                            <td>Feature Flim</td>
                            <td>Padatik</td>
                        </tr>
                        <tr>
                            <td rowspan="4">Sunday,<br> 3rd Aug 2025</td>
                            <td>12:00PM</td>
                            <td>Brunch with Star</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>04:30PM</td>
                            <td>Short Film</td>
                            <td>Manchitro: The Homeland</td>
                        </tr>
                        <tr>
                            <td>06:00PM</td>
                            <td>Feature Film</td>
                            <td>Parikrama</td>
                        </tr>
                        <tr>
                            <td>08:00PM</td>
                            <td>End of the Exhibition</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>

@include('Frontend.component.newsletter')


@section('css')
    <style>
        /* Center align text in table cells */
        .table {
            text-align: center;
        }

        /* Vertically align text in table cells */
        .table th,
        .table td {
            vertical-align: middle;
        }

        /* Hover effect for table rows */
        .table tbody tr:hover {
            background-color: #f2f2f2;
        }
    </style>
@endsection

