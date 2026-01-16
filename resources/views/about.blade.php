@extends('layouts.app')

@section('content')
<section class="section" style="margin-top: 5rem;">
    <h2 class="section-title">About Jodhana</h2>
    <div class="glass" style="padding: 3rem; margin-bottom: 3rem;">
        <p style="font-size: 1.1rem; margin-bottom: 1.5rem;">Jodhpur is the second-largest city in the Indian state of Rajasthan and officially the second metropolitan city of the state. It was formerly the seat of the princely state of Jodhpur State.</p>
        <p style="font-size: 1.1rem; margin-bottom: 1.5rem;">The city is known as the "Sun City" for the bright, sunny weather it enjoys all year round. It is also referred to as the "Blue City" due to the vivid blue-painted houses around the Mehrangarh Fort. Jodhpur is a popular tourist destination, featuring many palaces, forts and temples, set in the stark landscape of the Thar Desert.</p>
    </div>

    <div class="grid">
        <div class="card glass">
            <i class="fas fa-history" style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 1rem;"></i>
            <h3>History</h3>
            <p>Founded in 1459 by Rao Jodha, Jodhpur has a rich history as the capital of Marwar.</p>
        </div>
        <div class="card glass">
            <i class="fas fa-palette" style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 1rem;"></i>
            <h3>Art & Culture</h3>
            <p>From the Ghoomar dance to intricate handicrafts, the city is a treasure trove of culture.</p>
        </div>
        <div class="card glass">
            <i class="fas fa-utensils" style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 1rem;"></i>
            <h3>Cuisine</h3>
            <p>Don't miss the famous Mawa Kachori, Mirchi Bada, and other spicy Rajasthani delicacies.</p>
        </div>
    </div>
</section>
@endsection
