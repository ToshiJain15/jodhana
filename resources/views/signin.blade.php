@extends('layouts.app')

@section('content')
<section class="hero" style="min-height: 80vh;">
    <div class="glass" style="padding: 3rem; width: 100%; max-width: 450px;">
        <h2 style="margin-bottom: 2rem; text-align: center;">Welcome Back</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div style="margin-bottom: 1.5rem; text-align: left;">
                <label style="display: block; margin-bottom: 0.5rem; color: var(--text-muted);">Email Address</label>
                <input type="email" name="email" required style="width: 100%; padding: 0.8rem; background: var(--accent-color); border: 1px solid var(--glass-border); border-radius: 8px; color: white;">
            </div>
            <div style="margin-bottom: 2rem; text-align: left;">
                <label style="display: block; margin-bottom: 0.5rem; color: var(--text-muted);">Password</label>
                <input type="password" name="password" required style="width: 100%; padding: 0.8rem; background: var(--accent-color); border: 1px solid var(--glass-border); border-radius: 8px; color: white;">
            </div>
            <button type="submit" class="btn-premium" style="width: 100%;">Sign In</button>
            <p style="margin-top: 2rem; text-align: center; color: var(--text-muted);">
                Don't have an account? <a href="{{ url('/signup') }}" style="color: var(--secondary-color); text-decoration: none;">Sign Up</a>
            </p>
        </form>
    </div>
</section>
@endsection