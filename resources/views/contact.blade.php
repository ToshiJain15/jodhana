@extends('layouts.app')

@section('content')
<section class="section" style="margin-top: 5rem;">
    <h2 class="section-title">Get In Touch</h2>
    <div style="display: flex; flex-wrap: wrap; gap: 4rem;">
        <div style="flex: 1; min-width: 300px;">
            <div class="glass" style="padding: 2.5rem;">
                <form action="#" method="POST">
                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; margin-bottom: 0.5rem;">Name</label>
                        <input type="text" style="width: 100%; padding: 0.8rem; background: var(--accent-color); border: 1px solid var(--glass-border); border-radius: 8px; color: white;">
                    </div>
                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; margin-bottom: 0.5rem;">Email</label>
                        <input type="email" style="width: 100%; padding: 0.8rem; background: var(--accent-color); border: 1px solid var(--glass-border); border-radius: 8px; color: white;">
                    </div>
                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; margin-bottom: 0.5rem;">Message</label>
                        <textarea rows="5" style="width: 100%; padding: 0.8rem; background: var(--accent-color); border: 1px solid var(--glass-border); border-radius: 8px; color: white;"></textarea>
                    </div>
                    <button type="submit" class="btn-premium" style="width: 100%;">Send Message</button>
                </form>
            </div>
        </div>
        <div style="flex: 1; min-width: 300px;">
            <div class="card glass">
                <h3>Contact Information</h3>
                <ul style="list-style: none; margin-top: 2rem;">
                    <li style="margin-bottom: 1.5rem;"><i class="fas fa-map-marker-alt" style="color: var(--secondary-color); margin-right: 1rem;"></i> Plot No. 345, Sukhram Nagar, Jodhpur.</li>
                    <li style="margin-bottom: 1.5rem;"><i class="fas fa-phone" style="color: var(--secondary-color); margin-right: 1rem;"></i> +91-7014265827</li>
                    <li style="margin-bottom: 1.5rem;"><i class="fas fa-envelope" style="color: var(--secondary-color); margin-right: 1rem;"></i> manisha.seervi@jodhana.com</li>
                </ul>
                <div style="margin-top: 2rem; border-radius: 10px; overflow: hidden; height: 250px;">
                     <img src="{{ url('images/map.jpg') }}" alt="Map" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
