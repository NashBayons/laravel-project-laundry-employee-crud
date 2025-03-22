@extends('layouts.app')

@section('content')
<div class="intro">
    <div class="rectangle-1"></div>
    <div class="laundry-lessons-finding-clean-moments-in-the-chaos">
        "Laundry Lessons: Finding Clean Moments in the Chaos"
    </div>
    <div class="dirty-laundry-can-be-overwhelming-but-it-s-a-reminder-that-even-messes-can-be-cleaned-each-load-brings-us-closer-to-a-fresh-start">
        Dirty laundry can be overwhelming, but it’s a reminder that even messes can be cleaned. Each load brings us closer to a fresh start.
    </div>
    <img class="image" src="{{ asset('images/image0.png') }}" />
    <img class="ellipse-2" src="{{ asset('images/ellipse-20.png') }}" />
    <img class="ellipse-3" src="{{ asset('images/ellipse-30.png') }}" />
    <img class="ellipse-4" src="{{ asset('images/ellipse-40.png') }}" />
    <img class="ellipse-5" src="{{ asset('images/ellipse-50.png') }}" />
    <img class="ellipse-6" src="{{ asset('images/ellipse-60.png') }}" />
    <img class="ellipse-7" src="{{ asset('images/ellipse-70.png') }}" />
    <img class="ellipse-8" src="{{ asset('images/ellipse-80.png') }}" />
    <img class="ellipse-9" src="{{ asset('images/ellipse-90.png') }}" />
    <img class="ellipse-10" src="{{ asset('images/ellipse-100.png') }}" />
    <div class="rectangle-7"></div>
    <a href="{{ route('orders.index') }}" class="get-started">Get started!</a>
</div>
