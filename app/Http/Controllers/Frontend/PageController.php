<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('Frontend.pages.home');
    }

    public function schedule(){
        return view('Frontend.pages.schedule');
    }

    public function tickets(){
        return view('Frontend.pages.tickets');
    }

    public function sponsors(){
        return view('Frontend.pages.sponsors');
    }

    public function member(){
        return view('Frontend.pages.membership');
    }

    public function about(){
        return view('Frontend.pages.about');
    }

    public function event(){
        return view('Frontend.pages.event');
    }

    public function gallery(){
        return view('Frontend.pages.gallery');
    }

    public function media(){
        return view('Frontend.pages.media');
    }

    public function video(){
        return view('Frontend.pages.video');
    }

    public function contact(){
        return view('Frontend.pages.contact');
    }

    public function fest_2016(){
        return view('Frontend.pages.poster.fest_2016');
    }

    public function fest_2017(){
        return view('Frontend.pages.poster.fest_2017');
    }

    public function fest_2018(){
        return view('Frontend.pages.poster.fest_2018');
    }

    public function fest_2019(){
        return view('Frontend.pages.poster.fest_2019');
    }

    public function fest_2020(){
        return view('Frontend.pages.poster.fest_2020');
    }

    public function fest_2022(){
        return view('Frontend.pages.poster.fest_2022');
    }

    public function fest_2023(){
        return view('Frontend.pages.poster.fest_2023');
    }

    public function fest_2024(){
        return view('Frontend.pages.poster.fest_2024');
    }

    public function fest_2025(){
        return view('Frontend.pages.poster.fest_2025');
    }
}
