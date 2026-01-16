@extends('layouts.app')

@section('content')
<section class="hero">
    <h1 class="animate__animated animate__fadeInDown">JODHANA TRIP ADVISOR</h1>
    <p class="animate__animated animate__fadeInUp">Take only pictures, Leave only footprints. Discover the magnificent second-largest city of Rajasthan.</p>
    <a href="{{ url('/places') }}" class="btn-premium animate__animated animate__fadeInUp">Explore Places</a>
</section>

<section class="section">
    <h2 class="section-title">Why Visit Jodhpur?</h2>
    <div class="grid">
        <div class="card glass">
            <h3>The Blue City</h3>
            <p>Experience the mesmerizing blue-painted houses that give Jodhpur its iconic nickname. A photographer's paradise.</p>
        </div>
        <div class="card glass">
            <h3>Stunning Heritage</h3>
            <p>Home to the majestic Mehrangarh Fort and Umaid Bhawan Palace, showcasing the pinnacle of Rajput architecture.</p>
        </div>
        <div class="card glass">
            <h3>Rich Culture</h3>
            <p>From vibrant local markets like Sadar Bazaar to world-renowned folk festivals, Jodhpur is a cultural hub.</p>
        </div>
    </div>
</section>

<section class="section" style="background: var(--accent-color);">
    <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 4rem;">
        <div style="flex: 1; min-width: 300px;">
            <img src="{{ url('images/jod.jpg') }}" alt="Jodhpur" style="width: 100%; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
        </div>
        <div style="flex: 1; min-width: 300px;">
            <h2 class="section-title" style="text-align: left;">Discover Marwar</h2>
            <p style="margin-bottom: 2rem; color: var(--text-muted);">Jodhpur was historically the capital of the Kingdom of Marwar. Popularly known as the "Sun City" because of the bright and sunny weather it enjoys all year round, it is also called the "Blue City" due to the vivid blue-painted houses around the Mehrangarh Fort.</p>
            <a href="{{ url('/about') }}" class="btn-premium">Learn More</a>
        </div>
    </div>
</section>
@endsection