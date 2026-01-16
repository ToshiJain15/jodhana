@extends('layouts.app')

@section('content')
<section class="section" style="margin-top: 5rem;">
    <h2 class="section-title">Cabs & Bus Services</h2>
    <div class="glass" style="padding: 2rem; margin-bottom: 3rem; text-align: center;">
        <p>Reliable transportation for your Jodhpur journey. We connect you with verified local operators.</p>
    </div>

    <div class="grid">
        <div class="card glass">
            <i class="fas fa-car" style="font-size: 3rem; color: var(--secondary-color); margin-bottom: 1.5rem;"></i>
            <h3>Private Cabs</h3>
            <p>Affordable city tours and long-distance travel. Professional drivers with AC vehicles.</p>
            <ul style="list-style: none; margin-top: 1rem; color: var(--text-muted); font-size: 0.9rem;">
                <li><i class="fas fa-check"></i> 8 hours / 80km packages</li>
                <li><i class="fas fa-check"></i> Airport & Railway transfers</li>
            </ul>
            <a href="{{ url('/contact') }}" class="btn-premium" style="margin-top: 1.5rem; padding: 0.6rem 1.5rem;">Book Now</a>
        </div>
        <div class="card glass">
            <i class="fas fa-bus" style="font-size: 3rem; color: var(--secondary-color); margin-bottom: 1.5rem;"></i>
            <h3>Tourist Bus</h3>
            <p>Daily sight-seeing bus service covering all major attractions in Jodhpur.</p>
            <ul style="list-style: none; margin-top: 1rem; color: var(--text-muted); font-size: 0.9rem;">
                <li><i class="fas fa-check"></i> Guided group tours</li>
                <li><i class="fas fa-check"></i> Departure every morning at 9 AM</li>
            </ul>
            <a href="{{ url('/contact') }}" class="btn-premium" style="margin-top: 1.5rem; padding: 0.6rem 1.5rem;">Join Tour</a>
        </div>
        <div class="card glass">
            <i class="fas fa-motorcycle" style="font-size: 3rem; color: var(--secondary-color); margin-bottom: 1.5rem;"></i>
            <h3>Bike Rentals</h3>
            <p>Explore the narrow blue streets at your own pace. Scooters and Royal Enfields available.</p>
            <ul style="list-style: none; margin-top: 1rem; color: var(--text-muted); font-size: 0.9rem;">
                <li><i class="fas fa-check"></i> Flexible hourly rates</li>
                <li><i class="fas fa-check"></i> Hemlets provided</li>
            </ul>
            <a href="{{ url('/contact') }}" class="btn-premium" style="margin-top: 1.5rem; padding: 0.6rem 1.5rem;">Rent Now</a>
        </div>
    </div>
</section>
@endsection
