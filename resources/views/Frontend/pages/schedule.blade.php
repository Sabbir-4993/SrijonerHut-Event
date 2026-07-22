@extends('Frontend.master')

@section('title')
    Schedule | Srijoner Hut
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') Schedule @endsection

@section('content')

@include('Frontend.layouts.__breadcrumb')

@include('Frontend.component.schedule')

<section class="schedule-modern">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Festival Schedule</span>
            <h2>2026</h2>
        </div>

        <div class="sm-days">

            <!-- Friday -->
            <div class="sm-day">
                <div class="sm-day-head">
                    <div class="sm-day-date">
                        <span class="sm-day-num">31</span>
                        <span class="sm-day-mon">Jul</span>
                    </div>
                    <div class="sm-day-name">Friday</div>
                </div>
                <div class="sm-events">
                    <div class="sm-event">
                        <span class="sm-time">05:00 PM</span>
                        <span class="sm-desc">Kick-off Festival</span>
                    </div>
                    <div class="sm-event">
                        <span class="sm-time">06:00 PM</span>
                        <span class="sm-desc">Meet &amp; Greet</span>
                    </div>
                    <div class="sm-event">
                        <span class="sm-time">07:00 PM</span>
                        <span class="sm-desc">Red Carpet</span>
                    </div>
                    <div class="sm-event">
                        <span class="sm-time">08:00 PM</span>
                        <span class="sm-desc">Opening Speech</span>
                    </div>
                    <div class="sm-event film short">
                        <span class="sm-time">08:00 PM</span>
                        <span class="sm-badge">Short Film</span>
                        <span class="sm-desc">নিলীন (FUSED)</span>
                    </div>
                    <div class="sm-event film feature">
                        <span class="sm-time">08:00 PM</span>
                        <span class="sm-badge">Feature Film</span>
                        <span class="sm-desc">Utshob</span>
                    </div>
                </div>
                <a href="https://filmfreeway.com/BengaliFilmFestivalofDallas/tickets" title="Festival of Dallas 2026" target="_blank" class="sm-ticket-btn">Get Ticket</a>
            </div>

            <!-- Saturday -->
            <div class="sm-day">
                <div class="sm-day-head">
                    <div class="sm-day-date">
                        <span class="sm-day-num">1</span>
                        <span class="sm-day-mon">Aug</span>
                    </div>
                    <div class="sm-day-name">Saturday</div>
                </div>
                <div class="sm-events">
                    <div class="sm-event film short">
                        <span class="sm-time">01:30 PM</span>
                        <span class="sm-badge">Short Film</span>
                        <span class="sm-desc">মণিহারা (Monihara)</span>
                    </div>
                    <div class="sm-event film feature">
                        <span class="sm-time">01:30 PM</span>
                        <span class="sm-badge">Feature Film</span>
                        <span class="sm-desc">অনাবৃত (Unveiled)</span>
                    </div>
                    <div class="sm-event">
                        <span class="sm-time">06:00 PM</span>
                        <span class="sm-desc">Dinner</span>
                    </div>
                    <div class="sm-event film short">
                        <span class="sm-time">08:00 PM</span>
                        <span class="sm-badge">Short Film</span>
                        <span class="sm-desc">আমার Comrade (My Comrade)</span>
                    </div>
                    <div class="sm-event film feature">
                        <span class="sm-time">08:00 PM</span>
                        <span class="sm-badge">Feature Film</span>
                        <span class="sm-desc">স্বার্থপর (Sharthopor)</span>
                    </div>
                </div>
                <a href="https://filmfreeway.com/BengaliFilmFestivalofDallas/tickets" title="Festival of Dallas 2026" target="_blank" class="sm-ticket-btn">Get Ticket</a>
            </div>

            <!-- Sunday -->
            <div class="sm-day">
                <div class="sm-day-head">
                    <div class="sm-day-date">
                        <span class="sm-day-num">2</span>
                        <span class="sm-day-mon">Aug</span>
                    </div>
                    <div class="sm-day-name">Sunday</div>
                </div>
                <div class="sm-events">
                    <div class="sm-event">
                        <span class="sm-time">12:00 PM</span>
                        <span class="sm-desc">Brunch with Star</span>
                    </div>
                    <div class="sm-event film short">
                        <span class="sm-time">05:00 PM</span>
                        <span class="sm-badge">Short Film</span>
                        <span class="sm-desc">হাওয়াই মিঠাই (The Sweetness of Air)</span>
                    </div>
                    <div class="sm-event film feature">
                        <span class="sm-time">05:00 PM</span>
                        <span class="sm-badge">Feature Film</span>
                        <span class="sm-desc">কর্পূর (Korpur)</span>
                    </div>
                    <div class="sm-event">
                        <span class="sm-time">08:00 PM</span>
                        <span class="sm-desc">End of the Exhibition</span>
                    </div>
                </div>
                <a href="https://filmfreeway.com/BengaliFilmFestivalofDallas/tickets" title="Festival of Dallas 2026" target="_blank" class="sm-ticket-btn">Get Ticket</a>
            </div>

        </div>
    </div>
</section>

@include('Frontend.component.newsletter')

@section('css')
    <style>
        .schedule-modern { padding: 80px 0; background: #faf7fb; }

        .sm-days {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 50px;
        }

        .sm-day {
            background: #ffffff;
            border-radius: 16px;
            padding: 26px 22px 24px;
            box-shadow: 0 6px 20px rgba(20, 5, 7, 0.07);
            display: flex;
            flex-direction: column;
        }

        .sm-day-head {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 20px;
            padding-bottom: 18px;
            border-bottom: 1px solid #efe6e8;
        }
        .sm-day-date {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 54px;
            height: 54px;
            border-radius: 12px;
            background: #d8395a;
            color: #ffffff;
            line-height: 1.1;
            flex-shrink: 0;
        }
        .sm-day-num { font-size: 20px; font-weight: 800; }
        .sm-day-mon { font-size: 11px; letter-spacing: 0.5px; text-transform: uppercase; }
        .sm-day-name { font-size: 19px; font-weight: 700; color: #221016; }

        .sm-events { display: flex; flex-direction: column; gap: 10px; flex-grow: 1; }
        .sm-event {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            padding: 10px 12px;
            border-radius: 10px;
            background: #faf7fb;
            font-size: 14px;
        }
        .sm-event.film { background: #fff6e8; }
        .sm-event.film.short { background: #ffeef1; }

        .sm-time {
            font-size: 12px;
            font-weight: 700;
            color: #8a7a7d;
            min-width: 70px;
        }
        .sm-desc { font-weight: 600; color: #221016; }
        .sm-badge {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.4px;
            text-transform: uppercase;
            padding: 3px 9px;
            border-radius: 999px;
            color: #ffffff;
        }
        .sm-event.short .sm-badge { background: #ff5a6e; }
        .sm-event.feature .sm-badge { background: #f5b301; color: #3a2500; }

        .sm-ticket-btn {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 12px 20px;
            border-radius: 999px;
            background: #221016;
            color: #ffffff;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.4px;
            text-decoration: none;
            transition: background 0.25s ease;
        }
        .sm-ticket-btn:hover { background: #d8395a; color: #ffffff; }

        @media (max-width: 991px) {
            .sm-days { grid-template-columns: 1fr; }
        }
    </style>
@endsection

@endsection
