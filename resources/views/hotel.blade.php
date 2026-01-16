@extends('layouts.app')

@section('content')
<section class="section" style="margin-top: 5rem;">
    <h2 class="section-title">Stay in Jodhpur</h2>
    <div class="grid">
        <div class="card glass">
            <img src="{{ url('images/hotel-1.jpg') }}" alt="Heritage Hotel" onerror="this.src='{{ url('images/umaid.jpg') }}'">
            <h3>RAJ MAHAL PALACE</h3>
            <p>Experience the royal lifestyle in this converted heritage hotel offering panoramic views of the city and the fort.</p>
            <div style="margin-top: 1rem; color: var(--secondary-color);">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <div class="card glass">
            <img src="{{ url('images/hotel-2.jpg') }}" alt="Boutique Hotel" onerror="this.src='{{ url('images/khejarla.jpg') }}'">
            <h3>THE BLUE HAVEN</h3>
            <p>A boutique stay in the heart of the old city, featuring traditional blue interiors and a stunning rooftop restaurant.</p>
            <div style="margin-top: 1rem; color: var(--secondary-color);">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            </div>
        </div>
        <div class="card glass">
            <img src="{{ url('images/hotel-3.jpg') }}" alt="Luxury Resort" onerror="this.src='{{ url('images/sardar.jpg') }}'">
            <h3>DESERT ROSE RESORT</h3>
            <p>Luxury meets wilderness. This desert resort offers tented accommodations and camel safaris just outside the city.</p>
            <div style="margin-top: 1rem; color: var(--secondary-color);">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    </div>
</section>
@endsection