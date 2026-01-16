@extends('layouts.app')

@section('content')
<section class="section" style="margin-top: 5rem;">
    <h2 class="section-title">Places to Visit</h2>
    <div class="grid">
        <div class="card glass">
            <img src="{{ url('images/mehrangarh.jpg') }}" alt="Mehrangarh Fort">
            <h3>MEHRANGARH FORT</h3>
            <p>Rising perpendicular and impregnable from a hill which is 125 metres above Jodhpur’s skyline is the Mehrangarh Fort. Known for its exquisite latticed windows and carved panels.</p>
        </div>
        <div class="card glass">
            <img src="{{ url('images/khejarla.jpg') }}" alt="Khejarla Fort">
            <h3>KHEJARLA FORT</h3>
            <p>Located 85 kilometres from the main city, the 400-year old Khejarla Fort is a stunning red sandstone monument, now a heritage hotel.</p>
        </div>
        <div class="card glass">
            <img src="{{ url('images/umaid.jpg') }}" alt="Umaid Bhawan Palace">
            <h3>UMAID BHAWAN PALACE</h3>
            <p>Built with sandstone and marble, it is recognized as one of the largest private homes in the world and one of the most spectacular buildings.</p>
        </div>
        <div class="card glass">
            <img src="{{ url('images/ranisar.jpg') }}" alt="Ranisar Padamsar">
            <h3>RANISAR PADAMSAR</h3>
            <p>Adjacent lakes constructed in 1459, offering a serene atmosphere near the Fateh Pole in Mehrangarh.</p>
        </div>
        <div class="card glass">
            <img src="{{ url('images/jaswant.jpg') }}" alt="Jaswant Thada">
            <h3>JASWANT THADA</h3>
            <p>A milky white marble memorial built as a tribute to Maharaja Jaswant Singh II, often called the "Taj Mahal of Marwar".</p>
        </div>
        <div class="card glass">
            <img src="{{ url('images/ghantaghar.jpg') }}" alt="Ghanta Ghar">
            <h3>GHANTA GHAR</h3>
            <p>The Clock Tower is a prominent landmark in the old city, surrounded by the vibrant Sadar Market.</p>
        </div>
    </div>
</section>
@endsection