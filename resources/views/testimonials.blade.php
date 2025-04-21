@extends('layouts.app')

@section('title', 'Testimoni')

@section('content')
    <section class="testimonials-section">
        <h1 class="text-center mb-5">Apa Kata Pelanggan Kami</h1>
        
        <div class="row">
            @foreach($testimonials as $testimonial)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                @for($i = 0; $i < $testimonial['rating']; $i++)
                                    <span class="text-warning">★</span>
                                @endfor
                                @for($i = $testimonial['rating']; $i < 5; $i++)
                                    <span class="text-secondary">★</span>
                                @endfor
                            </div>
                            <p class="card-text">"{{ $testimonial['comment'] }}"</p>
                            <p class="card-text text-end fw-bold">- {{ $testimonial['name'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection