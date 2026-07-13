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
            <h2>2026</h2>
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
                            <td rowspan="6">Friday,<br> 31st July 2026</td>
                            <td>05:00PM</td>
                            <td>Kick-off Festival</td>
                            <td>-</td>
                            <td rowspan="15">
                                <a href="https://filmfreeway.com/BengaliFilmFestivalofDallas/tickets" title="Festival of Dallas 2026" target="_blank" class="theme-btn btn-style-two"><span class="btn-title">Get Ticket</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>06:00PM</td>
                            <td>Meet - Greet</td>
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
                            <td></td>
                            <td>Short Film</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>08:00PM</td>
                            <td>Feature Film</td>
                            <td>Utshob</td>
                        </tr>
                        <tr>
                            <td rowspan="5">Saturday,<br> 1st Aug 2026</td>
                            <td></td>
                            <td>Short Film</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>01:30PM</td>
                            <td>Feature Film</td>
                            <td>অনাবৃত (Unveiled)</td>
                        </tr>
                        <tr>
                            <td>06:00PM</td>
                            <td>Dinner</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Short Film</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>07:30PM</td>
                            <td>Feature Film</td>
                            <td>স্বার্থপর (Sharthopor)</td>
                        </tr>
                        <tr>
                            <td rowspan="4">Sunday,<br> 2nd Aug 2026</td>
                            <td>12:00PM</td>
                            <td>Brunch with Star</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Short Film</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>04:30PM</td>
                            <td>Feature Film</td>
                            <td>কর্পূর (Korpur)</td>
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

